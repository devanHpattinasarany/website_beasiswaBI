<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{

    public function index(): string
    {
        return view('landing_page');
    }
    public function dashboard(): string
    {
        // Ambil data user aktif
        $user = user();

        // Mengambil data Mahasiswa yang terkait dengan pengguna yang sedang aktif
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->where('user_id', $user->id)->first();
        $reviewer = $mahasiswa['id_reviewer'];
        $nama_lengkap = $mahasiswa['nama_lengkap'];

        if ($nama_lengkap == null) {
            $cek = false;
        } else {
            $cek = true;
        }


        if ($reviewer == 1) {
            $asalKampus = 'Universitas Pattimura';
        } elseif ($reviewer == 2) {
            $asalKampus = 'IAIN Ambon';
        } else {
            $asalKampus = 'Universitas Kristen Indonesia Maluku';
        }

        $data = [
            'cek' => $cek,
            'asalKampus' => $asalKampus
        ];

        return view('dashboard', $data);
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
