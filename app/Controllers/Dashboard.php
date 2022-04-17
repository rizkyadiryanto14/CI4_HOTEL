<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $kamarModel;
    public function __construct()
    {
        $this->kamarModel = new KamarModel();
    }

    public function index()
    {
        $kamar = $this->kamarModel->room_count(); 
        $data = [
            'title' => 'Dashboard - Hotel Reservasi Admin',
            'kamar' => $kamar
        ];
        // dd($kamar);
        return view('admin/dashboard/index', $data);
    }
}
