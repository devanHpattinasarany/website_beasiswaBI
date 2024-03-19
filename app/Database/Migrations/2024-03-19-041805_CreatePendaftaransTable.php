<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePendaftaransTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true,
            ],
            'id_reviewer' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['pending', 'diterima', 'ditolak'],
                'default' => 'pending',
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'golongan_darah' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'suku_bangsa' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'ip_semester_terakhir' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kabupaten' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat_domisili' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'pekerjaan_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'pekerjaan_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'minat' => [
                'type' => 'TEXT',
            ],
            'bakat' => [
                'type' => 'TEXT',
            ],
            'ketrampilan_hidup' => [
                'type' => 'TEXT',
            ],
            'potensi_dalam_diri' => [
                'type' => 'TEXT',
            ],
            'pengalaman_organisasi' => [
                'type' => 'TEXT',
            ],
            'motivasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alasan_motivasi' => [
                'type' => 'TEXT',
            ],
            'file_ktp' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_ktm' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_khs' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_surat_rekomendasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_cv' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_motivation_letter' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_surat_keterangan_beasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_sktm' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_sertifikat_penghargaan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_sertifikat_magang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'file_sertifikat_nasional_internasional' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_mahasiswa', 'mahasiswas', 'npm_nim');
        $this->forge->addForeignKey('id_reviewer', 'reviewers', 'id');

        $this->forge->createTable('pendaftarans');
    }

    public function down()
    {
        $this->forge->dropTable('pendaftarans');
    }
}
