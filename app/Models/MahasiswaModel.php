<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table            = 'mahasiswas';
    protected $primaryKey = 'npm_nim';
    // protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['npm_nim', 'user_id', 'id_reviewer', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'gol_darah', 'suku_bangsa', 'asal_universitas', 'fakultas', 'program_studi', 'ip_semester_terakhir', 'provinsi', 'kabupaten', 'alamat_ktp', 'alamat_domisili', 'email', 'no_whatsapp', 'instagram', 'facebook', 'nama_ayah', 'pekerjaan_ayah', 'nama_ibu', 'pekerjaan_ibu'];

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
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
}
