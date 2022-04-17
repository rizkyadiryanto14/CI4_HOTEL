<?php

namespace App\Controllers;

class Resepsionis extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db        = \Config\Database::connect();
        $this->builder    = $this->db->table('users');
    }

    public function index()
    {
        $data['title'] = 'User List - Hotel Reservasi Resepsionis';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();
        $this->builder->select('users.id as userid, username, email');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query      = $this->builder->get();


        $data['users'] = $query->getResult();

        return view('resepsionis/index', $data);
    }
}
