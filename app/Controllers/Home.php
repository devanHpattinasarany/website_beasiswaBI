<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('kemahasiswaan/pendaftar');
    }
    public function diterima(): string
    {
        return view('kemahasiswaan/diterima');
    }
}
