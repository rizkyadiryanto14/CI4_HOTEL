<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id'           => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'kamar_id'          => [
                'type'          => 'VARCHAR',
                'constraint'   => 255,
            ],
            'tgl_masuk'         => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'tgl_keluar'        => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'total_harga'       => [
                'type'          => 'DOUBLE'
            ],
            'created_at'        => [
                'type'          => 'DATETIME',
                'null'          => TRUE
            ],
            'update_at'         => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
        ]);

        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
