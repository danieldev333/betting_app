<?php

namespace App\Http\Controllers\Admin;

class PayoutsController extends Controller
{
    public function history() {
    	return view('/admin/payouts/history');
    }
    public function pending() {
    	return view('/admin/payouts/pending');
    }
    public function paid() {
    	return view('/admin/payouts/paid');
    }
}
