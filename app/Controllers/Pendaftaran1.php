<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\PendaftaranModel;

class Pendaftaran1 extends BaseController
{

    public function index(): string
    {


        // Ambil data user aktif
        $user = user();

        // Mengambil data Mahasiswa yang terkait dengan pengguna yang sedang aktif
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->where('user_id', $user->id)->first();
        $primaryKeyMhs = $mahasiswa['npm_nim'];
        // Lakukan pengecekan apakah data pendaftaran sudah ada untuk pengguna saat ini
        $pendaftaranModel = new PendaftaranModel();

        $dataPendaftaran = $pendaftaranModel->where('id_mahasiswa', $primaryKeyMhs)->first();
        if ($dataPendaftaran) {
            // Mengirim data Mahasiswa ke view
            return view('pendaftaran-info', ['dataPendaftaran' => $dataPendaftaran]);
        } else {
            // Mengirim data Mahasiswa ke view
            return view('pendaftaran-form1', ['mahasiswa' => $mahasiswa], ['dataPendaftaran' => $dataPendaftaran]);
        }
    }

    public function store()
    {

        // Ambil data user aktif
        $user = user();

        // // Mengambil data Mahasiswa yang terkait dengan pengguna yang sedang aktif
        // $mahasiswaModel = new MahasiswaModel();
        // $mahasiswa = $mahasiswaModel->where('user_id', $user->id)->first();



        // Validasi data
        $validationRules = [
            'nama_lengkap'        => 'required|min_length[3]|max_length[100]',
            'tempat_lahir'        => 'required|max_length[50]',
            'tanggal_lahir'       => 'required|valid_date',
            'jenis_kelamin'       => 'required|in_list[laki-laki,perempuan]',
            'agama'               => 'required|in_list[islam,kristen,katolik,hindu,buddha,konghucu]',
            'gol_darah'      => 'required|in_list[A,B,AB,O]',
            'suku_bangsa'         => 'required|max_length[50]',
            'fakultas'            => 'required|max_length[100]',
            'program_studi'       => 'required|max_length[100]',
            'ip_semester_terakhir' => 'required|decimal|max_length[4]',
            'provinsi'            => 'required|max_length[100]',
            'kabupaten'           => 'required|max_length[100]',
            'alamat_ktp'          => 'required|max_length[255]',
            'alamat_domisili'     => 'required|max_length[255]',
            'email'               => 'required|valid_email|max_length[100]',
            'no_whatsapp'         => 'required|numeric|max_length[15]',
            'instagram'           => 'permit_empty|max_length[50]',
            'facebook'            => 'permit_empty|max_length[50]',
            'nama_ayah'           => 'required|max_length[100]',
            'pekerjaan_ayah'      => 'required|max_length[100]',
            'nama_ibu'            => 'required|max_length[100]',
            'pekerjaan_ibu'       => 'required|max_length[100]',
        ];



        // Ambil data dari formulir pendaftaran
        // $formData = [
        //     'nama_lengkap' => $this->request->getPost('nama_lengkap'),
        //     'tempat_lahir' => $this->request->getPost('tempat_lahir'),
        //     'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        //     'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        //     'agama' => $this->request->getPost('agama'),
        //     'gol_darah' => $this->request->getPost('gol_darah'),
        //     'suku_bangsa' => $this->request->getPost('suku_bangsa'),
        //     'fakultas' => $this->request->getPost('fakultas'),
        //     'program_studi' => $this->request->getPost('program_studi'),
        //     'ip_semester_terakhir' => $this->request->getPost('ip_semester_terakhir'),
        //     'provinsi' => $this->request->getPost('provinsi'),
        //     'kabupaten' => $this->request->getPost('kabupaten'),
        //     'alamat_ktp' => $this->request->getPost('alamat_ktp'),
        //     'alamat_domisili' => $this->request->getPost('alamat_domisili'),
        //     'email' => $this->request->getPost('email'),
        //     'no_whatsapp' => $this->request->getPost('no_whatsapp'),
        //     'instagram' => $this->request->getPost('instagram'),
        //     'facebook' => $this->request->getPost('facebook'),
        //     'nama_ayah' => $this->request->getPost('nama_ayah'),
        //     'pekerjaan_ayah' => $this->request->getPost('pekerjaan_ayah'),
        //     'nama_ibu' => $this->request->getPost('nama_ibu'),
        //     'pekerjaan_ibu'
        //     => $this->request->getPost('pekerjaan_ibu'),
        // ];
        $formData = $this->request->getPost();

        // Ambil ID user aktif
        $userID = user()->id;
        // Perbarui data mahasiswa berdasarkan ID user
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->where('user_id', $user->id)->first();
        $primaryKey = $mahasiswa['npm_nim'];
        $mahasiswaModel->update($primaryKey, $formData);
        // $mahasiswaModel->where('user_id', $userID)->update($formData);

        return redirect()->to('/pendaftar/hal-2')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }
}
