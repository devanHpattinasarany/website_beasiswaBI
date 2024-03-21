<?php

namespace App\Controllers;

class Reviewer extends BaseController
{
    public function index(): string
    {
        return view('kemahasiswaan/pendaftar');
    }
}
