<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showForm($productId)
    {
        $product = Product::findOrFail($productId);
        return view('pembayaran', compact('product'));
    }

    public function submit(Request $request, $productId)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'proof' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('proof')->store('payments', 'public');

        Payment::create([
            'product_id' => $productId,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'proof' => $path,
        ]);

        return redirect()->back()->with('success', 'Pembayaran anda sedang kami proses, harap tunggu beberapa waktu. Informasi selanjutnya akan dikirim ke email/no HP anda.');

    }
}
