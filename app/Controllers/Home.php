<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('kemahasiswaan/pendaftar');
    }
    public function login(): string
    {
        return view('login');
    }
    public function dashboard(): string
    {
        return view('mahasiswa/dashboard_mhs');
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


    // kmhs
    public function dashboard_kmhs(): string
    {
        return view('kemahasiswaan/dashboard_kmhswn');
    }
    public function pendaftar(): string
    {
        return view('kemahasiswaan/pendaftar');
    }
    public function diterima(): string
    {
        return view('kemahasiswaan/diterima');
    }
}
