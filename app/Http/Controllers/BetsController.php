<?php

namespace App\Http\Controllers;

class BetsController extends Controller
{
    public function index() {
    	return view('bets/index');
    }

    public function history() {
    	return view('bets/history');
    }

    public function placeBet() {
    	return view('bets/place');
    }
    public function placeBetFinish() {
    	return view('bets/place_finish');
    }
}
