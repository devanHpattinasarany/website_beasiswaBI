<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;
use App\Models\MahasiswaModel;

class Pendaftaran2 extends BaseController
{

    public function index()
    {
        return view('pendaftaran-form2');
    }

    public function store()
    {

        // Ambil data user aktif
        $user = user();

        // Validasi inputan teks
        // $validationRules = [
        //     'minat' => 'required',
        //     'bakat' => 'required',
        //     'ketrampilan_hidup' => 'required',
        //     'potensi_dalam_diri' => 'required',
        //     'pengalaman_organisasi' => 'required',
        //     'motivasi' => 'required',
        //     'alasan_motivasi' => 'required',
        // ];

        // if (!$this->validate($validationRules)) {
        //     return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        // }

        // // Ambil data inputan teks
        // $minat = $this->request->getPost('minat');
        // $bakat = $this->request->getPost('bakat');
        // $ketrampilan_hidup = $this->request->getPost('ketrampilan_hidup');
        // $potensi_dalam_diri = $this->request->getPost('potensi_dalam_diri');
        // $pengalaman_organisasi = $this->request->getPost('pengalaman_organisasi');
        // $motivasi = $this->request->getPost('motivasi');
        // $alasan_motivasi = $this->request->getPost('alasan_motivasi');

        // Ambil data inputan teks
        $inputData = [
            'minat' => $this->request->getPost('minat'),
            'bakat' => $this->request->getPost('bakat'),
            'ketrampilan_hidup' => $this->request->getPost('ketrampilan_hidup'),
            'potensi_dalam_diri' => $this->request->getPost('potensi_dalam_diri'),
            'pengalaman_organisasi' => $this->request->getPost('pengalaman_organisasi'),
            'motivasi' => $this->request->getPost('motivasi'),
            'alasan_motivasi' => $this->request->getPost('alasan_motivasi'),
        ];


        // Validasi dan pengelolaan file
        // $fileRules = [
        //     'file_ktp' => 'uploaded[file_ktp]|max_size[file_ktp,1024]|ext_in[file_ktp,pdf]',
        //     'file_ktm' => 'uploaded[file_ktm]|max_size[file_ktm,1024]|ext_in[file_ktm,pdf]',
        //     'file_khs' => 'uploaded[file_khs]|max_size[file_khs,1024]|ext_in[file_khs,pdf]',
        //     'file_surat_rekomendasi' => 'uploaded[file_surat_rekomendasi]|max_size[file_surat_rekomendasi,1024]|ext_in[file_surat_rekomendasi,pdf]',
        //     'file_cv' => 'uploaded[file_cv]|max_size[file_cv,1024]|ext_in[file_cv,pdf]',
        //     'file_motivation_letter' => 'uploaded[file_motivation_letter]|max_size[file_motivation_letter,1024]|ext_in[file_motivation_letter,pdf]',
        //     'file_surat_keterangan_beasiswa' => 'uploaded[file_surat_keterangan_beasiswa]|max_size[file_surat_keterangan_beasiswa,1024]|ext_in[file_surat_keterangan_beasiswa,pdf]',
        //     'file_sktm' => 'uploaded[file_sktm]|max_size[file_sktm,1024]|ext_in[file_sktm,pdf]',
        //     'file_sertifikat_penghargaan' => 'uploaded[file_sertifikat_penghargaan]|max_size[file_sertifikat_penghargaan,1024]|ext_in[file_sertifikat_penghargaan,pdf]',
        //     'file_sertifikat_magang' => 'uploaded[file_sertifikat_magang]|max_size[file_sertifikat_magang,1024]|ext_in[file_sertifikat_magang,pdf]',
        //     'file_sertifikat_nasional_internasional' => 'uploaded[file_sertifikat_nasional_internasional]|max_size[file_sertifikat_nasional_internasional,1024]|ext_in[file_sertifikat_nasional_internasional,pdf]',
        // ];

        // if (!$this->validate($fileRules)) {
        //     return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        // }

        // Ambil file yang diunggah
        $fileKTP = $this->request->getFile('file_ktp');
        $fileKTM = $this->request->getFile('file_ktm');
        $fileKHS = $this->request->getFile('file_khs');
        $fileSuratRekomendasi = $this->request->getFile('file_surat_rekomendasi');
        $fileCV = $this->request->getFile('file_cv');
        $fileMotivationLetter = $this->request->getFile('file_motivation_letter');
        $fileSuratKeteranganBeasiswa = $this->request->getFile('file_surat_keterangan_beasiswa');
        $fileSKTM = $this->request->getFile('file_sktm');
        $fileSertifikatPenghargaan = $this->request->getFile('file_sertifikat_penghargaan');
        $fileSertifikatMagang = $this->request->getFile('file_sertifikat_magang');
        $fileSertifikatNasionalInternasional = $this->request->getFile('file_sertifikat_nasional_internasional');


        // Generate random name untuk nama file
        $newNameKTP = $fileKTP->getRandomName();
        $newNameKTM = $fileKTM->getRandomName();
        $newNameKHS = $fileKHS->getRandomName();
        $newNameSuratRekomendasi = $fileSuratRekomendasi->getRandomName();
        $newNameCV = $fileCV->getRandomName();
        $newNameMotivationLetter = $fileMotivationLetter->getRandomName();
        $newNameSuratKeteranganBeasiswa = $fileSuratKeteranganBeasiswa->getRandomName();
        $newNameSKTM = $fileSKTM->getRandomName();
        $newNameSertifikatPenghargaan = $fileSertifikatPenghargaan->getRandomName();
        $newNameSertifikatMagang = $fileSertifikatMagang->getRandomName();
        $newNameSertifikatNasionalInternasional = $fileSertifikatNasionalInternasional->getRandomName();

        // Simpan file yang diunggah ke dalam direktori
        $uploadPath = 'uploads/';
        $fileKTP->move($uploadPath, $newNameKTP);
        $fileKTM->move($uploadPath, $newNameKTM);
        $fileKHS->move($uploadPath, $newNameKHS);
        $fileSuratRekomendasi->move($uploadPath, $newNameSuratRekomendasi);
        $fileCV->move($uploadPath, $newNameCV);
        $fileMotivationLetter->move($uploadPath, $newNameMotivationLetter);
        $fileSuratKeteranganBeasiswa->move($uploadPath, $newNameSuratKeteranganBeasiswa);
        $fileSKTM->move($uploadPath, $newNameSKTM);
        $fileSertifikatPenghargaan->move($uploadPath, $newNameSertifikatPenghargaan);
        $fileSertifikatMagang->move($uploadPath, $newNameSertifikatMagang);
        $fileSertifikatNasionalInternasional->move($uploadPath, $newNameSertifikatNasionalInternasional);

        $fileData = [
            'file_ktp' => $newNameKTP,
            'file_ktm' => $newNameKTM,
            'file_khs' => $newNameKHS,
            'file_surat_rekomendasi' => $newNameSuratRekomendasi,
            'file_cv' => $newNameCV,
            'file_motivation_letter' => $newNameMotivationLetter,
            'file_surat_keterangan_beasiswa' => $newNameSuratKeteranganBeasiswa,
            'file_sktm' => $newNameSKTM,
            'file_sertifikat_penghargaan' => $newNameSertifikatPenghargaan,
            'file_sertifikat_magang' => $newNameSertifikatMagang,
            'file_sertifikat_nasional_internasional' => $newNameSertifikatNasionalInternasional,
        ];

        // Ambil ID user aktif
        $userID = user()->id;

        // Perbarui data mahasiswa berdasarkan ID user
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->where('user_id', $user->id)->first();
        $npm_nim = $mahasiswa['npm_nim'];
        $id_reviewer = $mahasiswa['id_reviewer'];

        $idData = [
            'id_mahasiswa' => $npm_nim,
            'id_reviewer' => $id_reviewer,
        ];

        // Gabungkan kedua set data menjadi satu array
        $dataToInsert = array_merge($inputData, $fileData, $idData);

        // Simpan data ke dalam database
        $pendaftaranModel = new PendaftaranModel();
        $pendaftaranModel->insert($dataToInsert);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->to('/dashboard')->with('success', 'Data dan berkas berhasil diunggah dan disimpan.');
    }
}
