<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Game;

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
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'game_id' => $request->game_id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.produk.tambah')->with('success', 'Produk berhasil ditambahkan.');
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
        'name' => 'required',
        'description' => 'nullable|string',
        'price' => 'required|integer',
        'image' => 'nullable|image|max:2048',
    ]);

    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        $product->image = $imageName;
    }

    $product->save();

    return response()->json([
        'success' => true,
        'message' => 'Produk berhasil diperbarui!',
        'product' => $product
    ]);
}

public function destroy($id)
{
    try {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
}


}
