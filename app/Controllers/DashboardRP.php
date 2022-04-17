<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Controllers\BaseController;

class DashboardRP extends BaseController
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
            'title' => 'Dashboard - Hotel Reservasi Resepsionis',
            'kamar' => $kamar
        ];
        // dd($kamar);
        return view('resepsionis/dashboard/index', $data);
    }
}
