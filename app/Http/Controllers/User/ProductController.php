<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    // Tampilkan semua produk
    public function index()
    {
        $products = Product::with('game')->latest()->get(); // Ambil data dari database
        return view('datalistakun', compact('products'));
    }

    // Tampilkan detail produk berdasarkan ID
    public function detail($id)
    {
        $product = Product::with('game')->findOrFail($id);
        return view('detailProduk', compact('product'));
    }
}
