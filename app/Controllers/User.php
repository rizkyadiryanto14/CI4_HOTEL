<?php

namespace App\Controllers;

use App\Models\KamarModel;

class User extends BaseController
{
    protected $kamarModel;
    public function __construct()
    {
        $this->kamarModel = new KamarModel();
    }
    
    public function index()
    {
        $currentPage = $this->request->getVar('page_kamar') ? $this->request->getVar('page_kamar') : 1;

    
        $kamar = $this->kamarModel;
        
        $data = [
            'title' => 'Home - Hotel Reservasi',
            'kamar' => $kamar->paginate(3, 'kamar'),
            'pager' =>  $this->kamarModel->pager,
            'currentPage' =>  $currentPage
        ];
        return view('user/index', $data);
    }

    public function room()
    {
        $keyword = $this->request->getVar('keyword');
        // d($keyword);
        if($keyword) {
            $kamar = $this->kamarModel->search($keyword); 
        } else {
            $kamar = $this->kamarModel;
        }
        
        $data = [
            'title' => 'Kamar - Hotel Reservasi',
            'kamar' => $kamar->paginate(9, 'kamar'),
        ];

        return view('user/room', $data);
    }
    public function about()
    {
        $data['title'] = 'Tentang - Hotel Reservasi';
        return view('user/about', $data);
    }
    public function facility()
    {
        $data['title'] = 'Fasilitas - Hotel Reservasi';
        return view('user/facility', $data);
    }
    
    public function success()
    {
        $data['title'] = 'Success - Transaksi Berhasil!';
        return view('user/success', $data);
    }
}
