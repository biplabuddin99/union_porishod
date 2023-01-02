<?php

namespace App\Http\Controllers;

use App\Models\PaymentReceipt;
use Illuminate\Http\Request;

class PaymentReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Payment_receipt.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentReceipt  $paymentReceipt
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentReceipt $paymentReceipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentReceipt  $paymentReceipt
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentReceipt $paymentReceipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentReceipt  $paymentReceipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentReceipt $paymentReceipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentReceipt  $paymentReceipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentReceipt $paymentReceipt)
    {
        //
    }
}
