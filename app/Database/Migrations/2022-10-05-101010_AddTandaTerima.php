<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTandaTerima extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'no_terima' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_pengirim' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'id_penerima' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'tanggal' => [
                'type'           => 'DATETIME',
            ],
            'nama_pengirim' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email_pengirim' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'hp_pengirim' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'keterangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['new','approved','canceled','replaced'],
            ],
            'replaced_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tanda_terima');
    }

    public function down()
    {
        $this->forge->dropTable('tanda_terima');
    }
}