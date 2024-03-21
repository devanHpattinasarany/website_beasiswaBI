<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index(): string
    {
        return view('landing_page');
    }
    public function dashboard(): string
    {
        return view('dashboard');
    }

    public function pendaftar1(): string
    {
        return view('mahasiswa/pendaftaran-form1');
    }
    public function pendaftar2(): string
    {
        return view('mahasiswa/pendaftaran-form2');
    }
    public function profile(): string
    {
        return view('mahasiswa/profile');
    }
}
