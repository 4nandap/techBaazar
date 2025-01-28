<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkoutChart(Request $request) {
        return view('checkout.chart');
    }

    public function checkoutInfo(Request $request) {
        return view('checkout.info');
    }

    public function checkoutPayment(Request $request) {
        return view('checkout.payment');
    }

    public function checkoutComplete(Request $request) {
        return view('checkout.complete');
    }
}
