<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kamar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'jenis_kamar'        => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'slug'           => [
                'type'           => 'TEXT',
            ],
            'harga'          => [
                'type'           => 'DOUBLE',
            ],
        ]);
        $this->forge->createTable('kamar');
    }

    public function down()
    {
        $this->forge->dropTable('kamar');
    }
}
