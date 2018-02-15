<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index() {
    	return redirect('/login');
    }

    public function login() {
    	return view('index/login');
    }

    public function logout() {
    	return redirect('/');
    }

    
    public function register() {
    	return view('index/register');
    }
    public function register_confirm() {
    	return view('index/register_confirm');
    }
}
