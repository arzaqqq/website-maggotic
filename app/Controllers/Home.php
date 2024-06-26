<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function beranda(): string
    {
        return view('website/beranda');
    }
    public function ecolocator(): string
    {
        return view('website/ecolocator');
    }
    public function maggotech(): string
    {
        return view('website/maggotech');
    }
    public function smartgot(): string
    {
        return view('website/smartgot');
    }
    public function produk(): string
    {
        return view('website/produk');
    }
    public function zakatin(): string
    {
        return view('website/zakatin');
    }

    public function testimoni(): string
    {
        return view('website/testimoni');
    }
}