<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFotoTerima extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'id_terima' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'file_foto' => [
                'type'           => 'varchar',
                'constraint'     => '255',
            ],
            'caption' => [
                'type'           => 'varchar',
                'constraint'     => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_terima', 'tanda_terima', 'id');
        $this->forge->createTable('foto_terima');
    }

    public function down()
    {
        $this->forge->dropTable('foto_terima');
    }
}