<?php

namespace App\Http\Controllers\Admin;

class IndexController extends Controller
{
    public function index() {
    	return redirect('/admin/login');
    }

    public function login() {
    	return view('admin/index/login');
    }
}
