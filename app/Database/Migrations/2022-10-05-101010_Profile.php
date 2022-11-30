<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'hp' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'picture' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('profile');
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}