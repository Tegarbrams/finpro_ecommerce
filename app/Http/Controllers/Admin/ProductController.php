<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{

    public function index(Request $request)
    {
        $selectedGame = $request->query('game', 'all');
        $games = \App\Models\Game::all();

        $products = \App\Models\Product::with('game')
            ->when($selectedGame != 'all', function ($query) use ($selectedGame) {
                $query->whereHas('game', function ($q) use ($selectedGame) {
                    $q->where('name', $selectedGame); // <- Sesuaikan nama kolom
                });
            })
            ->get();

        return view('Admin.listacc', compact('products', 'games', 'selectedGame'));
    }

    public function create()
    {
        $games = \App\Models\Game::all();
        return view('Admin.tambah', compact('games'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'game_id' => 'required|exists:games,id',
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'description' => 'nullable|string',
            'screenshots.*' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        // Simpan thumbnail
        $thumbnailPath = $request->file('thumbnail')->store('uploads/thumbnail', 'public');

        // Upload screenshot baru
        $newScreenshots = [];
        if ($request->hasFile('screenshots')) {
            foreach ($request->file('screenshots') as $screenshot) {
                $path = $screenshot->store('uploads/screenshots', 'public');
                $newScreenshots[] = $path;
            }
        }

        $product = Product::create([
            'game_id' => $request->game_id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'thumbnail' => $thumbnailPath,
            'screenshots' => json_encode($newScreenshots),
        ]);



        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $games = Game::all();
        return view('Admin.editacc', compact('product', 'games'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|integer',
        'description' => 'nullable|string',
        'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        'screenshots.*' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
    ]);

    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;

    // Update thumbnail jika diunggah
    if ($request->hasFile('thumbnail')) {
        $thumbnailPath = $request->file('thumbnail')->store('uploads/thumbnail', 'public');
        $product->thumbnail = $thumbnailPath;
    }

    // Update screenshots jika diunggah
    if ($request->hasFile('screenshots')) {
        $newScreenshots = [];
        foreach ($request->file('screenshots') as $screenshot) {
            $path = $screenshot->store('uploads/screenshots', 'public');
            $newScreenshots[] = $path;
        }
        $product->screenshots = json_encode($newScreenshots);
    }

    $product->save();

    return response()->json(['message' => 'Produk berhasil diupdate.']);
}

    public function destroy($id)
{
    try {
        $product = Product::findOrFail($id);

        // Hapus thumbnail
        if ($product->thumbnail && Storage::disk('public')->exists($product->thumbnail)) {
            Storage::disk('public')->delete($product->thumbnail);
        }

        // Hapus semua screenshot
        $screenshots = json_decode($product->screenshots, true);
        foreach ($screenshots ?? [] as $screenshot) {
            if (Storage::disk('public')->exists($screenshot)) {
                Storage::disk('public')->delete($screenshot);
            }
        }

        $product->delete();

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
}

    
}
