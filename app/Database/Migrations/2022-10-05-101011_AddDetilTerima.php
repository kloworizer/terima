<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDetilTerima extends Migration
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
            'uraian' => [
                'type'           => 'varchar',
                'constraint'     => '255',
            ],
            'jumlah' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'satuan' => [
                'type'           => 'varchar',
                'constraint'     => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_terima', 'tanda_terima', 'id');
        $this->forge->createTable('detil_terima');
    }

    public function down()
    {
        $this->forge->dropTable('detil_terima');
    }
}