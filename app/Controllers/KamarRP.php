<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Controllers\BaseController;

class KamarRP extends BaseController
{
    protected $kamarModel;
    public function __construct()
    {
        $this->kamarModel = new KamarModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kamar List - Hotel Reservasi Admin',
            'kamar' => $this->kamarModel->getKamar()
        ];
        return view('resepsionis/kamar/index', $data);
    }
}
