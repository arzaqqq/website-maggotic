<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function beranda(): string
    {
        return view('website/beranda');
    }

    public function produk(): string
    {
        return view('website/produk');
    }
}