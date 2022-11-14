<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaporanModel;
use App\Models\TanggapanModel;
class PengaduanController extends BaseController{
    protected $laporans, $tanggapans;

    function __construct()
    {
        $this->laporans = new LaporanModel();
        $this->tanggapans = new TanggapanModel();
    }

    public function index(){
        $data["laporan"] = $this->laporans->findAll();
        return view("TampilanPetugas/laporanview",$data);
    }

    public function pengaduan(){
        $this->laporans->insert([
            'tgl_pengaduan'=>date('Y-m-d'),
            'nik'=>$this->request->getPost('nik'),
            'nama'=>$this->request->getPost('nama'),
            'isi_laporan'=>$this->request->getPost('isi_laporan'),
            'foto'=>$this->request->getPost('foto'),
            'status'=> 0
        ]);
        session()->setFlashdata('message', 'Laporan Berhasil di Kirim! Silahkan Tunggu Tanggapan Dari Kami');
        return redirect('dashboarduser');
    }

    public function tanggapan($id){

    }

}