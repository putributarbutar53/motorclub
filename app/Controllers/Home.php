<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ['auth'];

    public function index()
    {

        return view('web/index');
    }
    public function profile()
    {
        return view('web/profile');
    }
    public function produk()
    {
        return view('web/produk');
    }
    public function kontak()
    {
        return view('web/kontak');
    }
    public function about()
    {
        return view('web/about');
    }
    public function visi()
    {
        return view('web/visi');
    }
    public function event()
    {
        return view('web/even/index');
    }
    public function galeri()
    {
        return view('web/galeri/index');
    }
    public function klien()
    {
        return view('web/klien/index');
    }
    public function artikel()
    {
        return view('web/artikel/index');
    }
}
