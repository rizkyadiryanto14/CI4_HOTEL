<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\TransaksiModel;
use App\Controllers\BaseController;

class Transaksi extends BaseController
{
    protected $kamarModel;
    protected $transaksiModel;
    public function __construct()
    {
        $this->kamarModel = new KamarModel();
        $this->transaksiModel = new TransaksiModel();

    }
    
    public function index()
    {
        $data = [
            'title' => 'Daftar Transaksi',
            'transaksi' => $this->transaksiModel->findAll()
        ];
        // dd($data); 
        return view('admin/transaksi/index', $data);
    }

    public function booking($slug)
    {
        $data = [
            'title' => 'Nginap - Booking Kamar',
            'kamar' => $this->kamarModel->getKamar($slug)
        ];

        // jika kamar tidak ada ditabel
        if(empty($data['kamar'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Jenis kamar ' . $slug . ' tidak ditemukan.');
        }

        return view('user/booking', $data);
    }

}
