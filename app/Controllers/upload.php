<?php

namespace App\Controllers;

class Pendaftaran2 extends BaseController
{

    public function index()
    {
        return view('pendaftaran-form');
    }

    public function store()
    {
        // Ambil file yang diunggah dari form
        $file = $this->request->getFile('file_pdf');

        // Pindahkan file ke direktori yang ditentukan
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);
            $filePath = 'uploads/' . $newName;
        } else {
            // Handle error jika terjadi kesalahan saat mengunggah file
            return redirect()->back()->withInput()->with('error', 'Failed to upload file.');
        }

        // Simpan nama dan path file ke basis data
        $nama = $this->request->getPost('nama');
        $pendaftaranModel = new Pendaftaran();
        $pendaftaranModel->insert([
            'nama' => $nama,
            'path' => $filePath
        ]);

        // Redirect dengan pesan sukses
        return redirect()->to('/pendaftar')->with('success', 'File successfully uploaded.');
    }

    public function show()
    {
        // Ambil semua data pendaftaran dari basis data
        $pendaftaranModel = new Pendaftaran();
        $data['pendaftaran'] = $pendaftaranModel->findAll();

        // Tampilkan data pendaftaran di view
        return view('show-pendaftaran', $data);
    }
}
