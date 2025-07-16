<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('product')->latest()->get();
        return view('admin.bayar', compact('payments'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate(['status' => 'required|string']);

        $payment = Payment::findOrFail($id);
        $payment->status = $request->status;
        $payment->note = $request->note;
        $payment->save();

        return response()->json(['success' => true]);
    }
}
