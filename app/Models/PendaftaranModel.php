<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table            = 'pendaftarans';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['id_mahasiswa', 'id_reviewer', 'status', 'minat', 'bakat', 'ketrampilan_hidup', 'potensi_dalam_diri', 'pengalaman_organisasi', 'motivasi', 'alasan_motivasi', 'file_ktp', 'file_ktm', 'file_khs', 'file_surat_rekomendasi', 'file_cv', 'file_motivation_letter', 'file_surat_keterangan_beasiswa', 'file_sktm', 'file_sertifikat_penghargaan', 'file_sertifikat_magang', 'file_sertifikat_nasional_internasional'];

    public function mahasiswa()
    {
        return $this->belongsTo(MahasiswaModel::class, 'id_mahasiswa', 'npm_nim');
    }

    public function reviewer()
    {
        return $this->belongsTo(ReviewerModel::class, 'id_reviewer', 'id');
    }

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function getAll()
    {
        // $builder = $this->db->table('listform');
        // $builder->join('kategori', 'kategori.id_kategori = listform.id_kategori');
        // $builder->join('unit_kerja', 'unit_kerja.id_unit_kerja = listform.id_unit_kerja');
        // $builder->join('usersBM', 'usersBM.id_usersBM = listform.id_usersBM');
        // $query = $builder->get();
        // return $query->getResult();


        $builder = $this->db->table('pendaftarans');
        $builder->join('mahasiswas', 'mahasiswas.npm_nim = pendaftarans.id_mahasiswa');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getAllByReviewer($idReviewer)
    {
        $builder = $this->db->table('pendaftarans');
        $builder->where('pendaftarans.id_reviewer', $idReviewer); // Menentukan tabel 'pendaftarans'
        $builder->join('mahasiswas', 'mahasiswas.npm_nim = pendaftarans.id_mahasiswa');
        $query = $builder->get();
        return $query->getResult();
    }
}
