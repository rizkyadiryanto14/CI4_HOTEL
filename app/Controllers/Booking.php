<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\TransaksiModel;
use App\Controllers\BaseController;

class Booking extends BaseController
{
    protected $kamarModel;
    protected $transaksiModel;
    public function __construct()
    {
        $this->kamarModel = new KamarModel();
        $this->transaksiModel = new TransaksiModel();

    }
    
    public function save() 
    {
        $this->transaksiModel->save([
            'user_id' => rand(1, 2),
            'kamar_id' => rand(1, 50),
            'tgl_masuk' => $this->request->getVar('tgl_masuk'),
            'tgl_keluar' => $this->request->getVar('tgl_keluar'),
            'total_harga' => $this->request->getVar('total_harga')
            // 'slug' => $slug,
            // 'harga' => $this->request->getVar('harga'),
        ]);

        session()->setFlashData('pesan', 'Transaksi berhasil!');
        return redirect()->to('/user/success');
    }
}
