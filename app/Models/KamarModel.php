<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table = 'kamar';
    protected $useTimestamp = true;
    protected $allowedFields = ['jenis_kamar', 'slug', 'harga'];

    public function getKamar($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // pencarian
    public function search($keyword)
    {
        return $this->table('kamar')->like('jenis_kamar', $keyword);
    }

    public function room_count()
    {
        $builder = $this->db->table('kamar');
        return $builder->countAll();
    }

}