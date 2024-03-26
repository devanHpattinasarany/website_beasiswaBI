<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PendaftaranModel;
use App\Models\MahasiswaModel;
use App\Models\ReviewerModel;

class Pendaftar extends BaseController
{
    // public function index()
    // {
    //     // Ambil data user aktif
    //     $user = user();

    //     // Inisialisasi model Pendaftaran
    //     $pendaftaranModel = new PendaftaranModel();

    //     // Ambil semua data mahasiswa
    //     $mahasiswaModel = new MahasiswaModel();
    //     $mahasiswas = $mahasiswaModel->findAll();

    //     // Array untuk menyimpan data mahasiswa yang terkait dengan pendaftaran
    //     $mahasiswasWithPendaftaran = [];

    //     // Iterasi setiap mahasiswa
    //     foreach ($mahasiswas as $mahasiswa) {
    //         // Periksa apakah mahasiswa memiliki relasi dengan pendaftaran
    //         $pendaftaran = $pendaftaranModel->where('id_mahasiswa', $mahasiswa['npm_nim'])->first();

    //         // Jika ditemukan relasi, tambahkan mahasiswa ke dalam array
    //         if ($pendaftaran) {
    //             $mahasiswasWithPendaftaran[] = $mahasiswa;
    //         }
    //     }
    //     dd($mahasiswasWithPendaftaran);
    //     return view('kemahasiswaan/list pendaftar', ['mahasiswas' => $mahasiswasWithPendaftaran]);
    // }
    public function index()
    {
        // Ambil data user
        $user = user();

        // Cek apakah user ada
        if ($user) {
            // Buat instance model ReviewerModel
            $reviewerModel = new ReviewerModel();

            // Ambil id_reviewer berdasarkan id user
            $reviewerData = $reviewerModel->where('user_id', $user->id)->first();

            // Jika data reviewer ditemukan
            if ($reviewerData) {

                // Ambil id_reviewer
                $idReviewer = $reviewerData['id'];

                if ($idReviewer == 1) {
                    // Buat instance model PendaftaranModel
                    $pendaftaranModel = new PendaftaranModel();
                    // Ambil data pendaftaran berdasarkan id_reviewer
                    $data['mahasiswas'] = $pendaftaranModel->getAllByReviewer($idReviewer);

                    // cek apakah $data['mahasiswas'] tidak ada
                    if (empty($data['mahasiswas'])) {
                        // Redirect ke halaman pendaftaran
                        return view('kemahasiswaan/list pendaftar_empty', $data);
                    }

                    // Kembalikan data ke view
                    return view('kemahasiswaan/list pendaftar', $data);
                } elseif ($idReviewer == 2) {
                    // Buat instance model PendaftaranModel
                    $pendaftaranModel = new PendaftaranModel();
                    // Ambil data pendaftaran berdasarkan id_reviewer
                    $data['mahasiswas'] = $pendaftaranModel->getAllByReviewer($idReviewer);

                    // cek apakah $data['mahasiswas'] tidak ada
                    if (empty($data['mahasiswas'])) {
                        // Redirect ke halaman pendaftaran
                        return view('kemahasiswaan/list pendaftar_empty', $data);
                    }

                    // Kembalikan data ke view
                    return view('kemahasiswaan/list pendaftar', $data);
                } elseif ($idReviewer == 3) {

                    // Buat instance model PendaftaranModel
                    $pendaftaranModel = new PendaftaranModel();
                    // Ambil data pendaftaran berdasarkan id_reviewer
                    $data['mahasiswas'] = $pendaftaranModel->getAllByReviewer($idReviewer);
                    // cek apakah $data['mahasiswas'] tidak ada
                    if (empty($data['mahasiswas'])) {

                        // Redirect ke halaman pendaftaran
                        return view('kemahasiswaan/list pendaftar_empty', $data);
                    }

                    // Kembalikan data ke view
                    return view('kemahasiswaan/list pendaftar', $data);
                }
            }
        }
    }

    public function updateStatus()
    {

        // Ambil data dari formulir
        $pendaftaranId = $this->request->getPost('pendaftaran_id');
        $action = $this->request->getPost('action');


        // Validasi data yang diterima
        if ($pendaftaranId && ($action === 'diterima' || $action === 'ditolak')) {
            // Perbarui status pendaftaran sesuai tindakan yang diambil
            $pendaftaranModel = new PendaftaranModel();
            $pendaftaran = $pendaftaranModel->find($pendaftaranId);

            if ($pendaftaran) {
                // Update status berdasarkan tindakan yang diambil
                if ($action === 'diterima') {
                    $pendaftaranModel->update($pendaftaranId, ['status' => 'Diterima']);
                } elseif ($action === 'ditolak') {
                    $pendaftaranModel->update($pendaftaranId, ['status' => 'Ditolak']);
                }

                // Redirect kembali ke halaman sebelumnya atau halaman lain jika diperlukan
                return redirect()->back()->with('success', 'Status pendaftaran berhasil diperbarui.');
            } else {
                // Pendaftaran tidak ditemukan
                return redirect()->back()->with('error', 'Pendaftaran tidak ditemukan.');
            }
        } else {
            // Data yang diterima tidak valid
            return redirect()->back()->with('error', 'Data yang diterima tidak valid.');
        }
    }
}
