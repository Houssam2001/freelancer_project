<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return Payment::all();
    }
 
    public function show($id)
    {
        return Payment::find($id);
    }

    public function store(Request $request)
    {
        return Payment::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->update($request->all());

        return $payment;
    }

    public function delete(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return 204;
    }
}
