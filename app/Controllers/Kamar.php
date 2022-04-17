<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Controllers\BaseController;

class Kamar extends BaseController
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
        return view('admin/kamar/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Kamar - Hotel Reservasi Admin',
            'kamar' => $this->kamarModel->getKamar($slug)
        ];

        // jika kamar tidak ada ditabel
        if(empty($data['kamar'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Jenis kamar ' . $slug . ' tidak ditemukan.');
        }
        return view('admin/kamar/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah data - Hotel Reservasi Admin',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/kamar/create', $data);
    }

    public function save() 
    {
        if (!$this->validate([
            'jenis_kamar' => [
                'rules' => 'required|is_unique[kamar.jenis_kamar]',
                'errors' => [
                    'required' => '{field} kamar harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
                ]
        ])) {
            return redirect()->to('kamar/create')->withInput();
        }

        $slug = url_title($this->request->getVar('jenis_kamar'), '-', true);
        $this->kamarModel->save([
            'jenis_kamar' => $this->request->getVar('jenis_kamar'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
        ]);

        session()->setFlashData('pesan', 'Data berhasil di tambahkan!');
        return redirect()->to('/kamar');
    }

    public function delete($id)
    {
        $this->kamarModel->delete($id);
        session()->setFlashData('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/kamar');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Uabah Data - Hotel Reservasi Admin',
            'validation' => \Config\Services::validation(),
            'kamar' => $this->kamarModel->getKamar($slug)
        ];

        return view('admin/kamar/edit', $data);
    }

    public function update($id)
    {
        // pengecekan jenis kamar
        $kamarLama = $this->kamarModel->getKamar($this->request->getVar('slug'));
        if ($kamarLama['jenis_kamar'] == $this->request->getVar('jenis_kamar')) {
            $rule_jenis_kamar = 'required';
        } else {
            $rule_jenis_kamar = 'required|is_unique[kamar.jenis_kamar]';
        }
        if (!$this->validate([
            'jenis_kamar' => [
                'rules' => $rule_jenis_kamar,
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ]
        ])) {
            return redirect()->to('/kamar/edit/'. $this->request->getVar('slug'))->withInput();
        }

        $slug = url_title($this->request->getVar('jenis_kamar'), '-', true);
        $this->kamarModel->save([
            'id' => $id,
            'jenis_kamar' => $this->request->getVar('jenis_kamar'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
        ]);

        session()->setFlashData('pesan', 'Data berhasil diubah!');
        return redirect()->to('/kamar');
    }
}
