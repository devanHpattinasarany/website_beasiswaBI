<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMahasiswasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'npm_nim' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true, // Menambahkan atribut unsigned
            ],
            'id_reviewer' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'asal_universitas' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'program_studi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'instagram' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'facebook' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'no_whatsapp' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('npm_nim', true);
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('id_reviewer', 'reviewers', 'id', 'CASCADE', 'SET NULL');

        $this->forge->createTable('mahasiswas');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswas', true);
    }
}
