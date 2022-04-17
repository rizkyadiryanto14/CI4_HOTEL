<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KamarSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jenis_kamar' => 'Superior',
                'slug'    => ' Superior room merupakan jenis kamar hotel yang lebih baik dari sisi fasilitas hingga ukuran yang diberikan dibandingkan standar room. Perbedaan superior room dengan standar room mungkin tidak terlalu terlihat.',
                'harga'    => 1700000,
            ],

            [
                'jenis_kamar' => 'Deluxe',
                'slug'    => ' deluxe room di desain lebih menarik dan lebih lengkap fasilitasnya. Selain itu deluxe room juga kadang ditempatkan di area yang lebih baik dibandingkan standar dan superior room. Namun deluxe room pada beberapa hotel terkadang juga lebih rendah dari fasilitas hingga ukurannya dibandingkan jenis kamar hotel superior room.',
                'harga'    => 2000000,
            ],

            [
                'jenis_kamar' => 'Suite room',
                'slug'    => 'Jenis kamar hotel ini bisa dikatakan mirip dengan sebuah apartemen kecil yang berada di dalam hotel. Dengan fasilitas seperti kamar tidur, dapur, ruang tamu, dan kamar mandi yang terpisah, jenis kamar hotel ini biasanya digunakan oleh orang-orang yang sedang berbisnis hingga keluarga yang ingin menginap cukup lama.',
                'harga'    => 1000000,
            ],

            [
                'jenis_kamar' => 'Presiden Suite',
                'slug'    => 'Presidental bisa dikatakan sebagai jenis kamar hotel suit room yang lebih luas lagi. Jenis kamar hotel ini adalah janis kamar yang terbaik dan termahal dari sebuah hotel. Tidak semua hotel memiliki presidental suit. Fasilitas yang diberikan kamar inipun merupakan fasilitas yang terbaik yang ditawarkan oleh hotel.',
                'harga'    => 3000000,
            ]
        ];

        // Simple Queries [metode 1]
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder [metode 2 (hanya untuk 1 data)]
        // $this->db->table('kamar')->insert($data);

        //query data array,selai menggunakan looping
        $this->db->table('kamar')->insertBatch($data);
    }
}
