<?php

namespace App\Controllers;

class Pendaftaran2 extends BaseController
{

    public function index()
    {
        return view('pendaftaran-form2');
    }

    public function store()
    {
        dd("masuk pak eko");
        // Proses pengunggahan file
        $file = $this->request->getFile('ktp');

        // Pindahkan file ke direktori penyimpanan
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);
            $filePath = 'uploads/' . $newName;
        } else {
            // Handle error jika terjadi kesalahan saat mengunggah file
            return redirect()->back()->withInput()->with('error', 'Failed to upload file.');
        }

        // Proses penyimpanan data ke basis data
        $data = [
            'ktp' => $filePath,
            'pengalaman_organisasi' => $this->request->getPost('pengalaman_organisasi'),
            'motivasi' => $this->request->getPost('motivasi')
            // tambahkan kolom lainnya sesuai kebutuhan
        ];

        // Lakukan operasi penyimpanan data ke basis data

        // Redirect dengan pesan sukses
        return redirect()->to('/pendaftar')->with('success', 'Data berhasil disimpan.');
    }
}
