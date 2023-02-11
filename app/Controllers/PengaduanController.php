<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PengaduanModel;
class PengaduanController extends BaseController{
    protected $laporans;

    function __construct()
    {
        $this->laporans = new PengaduanModel();
    }

    public function index(){
        $data["laporan"] = $this->laporans->findAll();
        return view("TampilanPetugas/laporanview",$data);
    }

    public function savepengaduan(){
        // if (!$this->validate([
        //     'foto'=>[
        //         "rules"=>"uploaded[foto]|mime_in[foto, image/jpeg, image/jpg]|max_size[foto,2048]",
        //         "errors"=>[
        //             'uploaded'=>'Harus ada file yang diupload',
        //             'mime_in'=>'file extension harus berbentuk jpg / jpeg',
        //             'max_size'=>'ukuran maksimal 2 MB'
        //         ]
        //     ]
        // ])) {
        //     return redirect()->back()->withInput();
        // }
        $datafile = $this->request->getFile('foto');
        $filename = $datafile->getRandomName();

        $this->laporans->insert([
            'tgl_pengaduan'=>date("Y-m-d H:i:s"),
            'nik'=>$this->request->getPost('nik'),
            'nama'=>$this->request->getPost('nama'),
            'isi_laporan'=>$this->request->getPost('isi_laporan'),
            'foto'=> $filename,
            'status'=> '0',
        ]);
        $datafile->move('/uploads/berkas/',$filename);
        return redirect("laporan");

    }

    public function delete($id)
    {
        $this->laporans->delete($id);
        session()->setFlashdata('message','Data laporan Berhasil Dihapus');
        return redirect('laporan');
    }

}