<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $useTimestamp = true;
    protected $createdField = 'created_at';
    protected $allowedFields = ['user_id','kamar_id', 'tgl_masuk', 'tgl_keluar', 'total_harga', 'created_at', 'updated_at'];

    // public function getAll() {
    //     $builder = $this->db->table('transaksi');
    //     // $builder->select('username', 'jenis_kamar', 'tgl_masuk', 'gl_keluar', 'total_harga');
    //     $builder->join('kamar', 'kamar.id = transaksi.id');
    //     $builder->join('users', 'users.id = transaksi.id');
    //     $query = $builder->get();
    //     return $query->getResult(); 
    // }
}