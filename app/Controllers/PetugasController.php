<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PetugasModel;
use App\Models\MasyarakatModel;

class PetugasController extends BaseController
{
    protected $petugass,$masyarakats;

    function __construct()
    {
        $this->petugass = new PetugasModel();
        $this->masyarakats = new MasyarakatModel();
    }

    public function index()
    {
        $data['petugas'] = $this->petugass->findAll();
        return view('/TampilanPetugas/petugas_view', $data);
    }

    public function save()
    {
        $this->petugass->insert([
            'nama_petugas' => $this->request->getPost('nama_petugas'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'telp' => $this->request->getPost('telp'),
            'level' => $this->request->getPost('level'),
        ]);

        return redirect('petugas');
    }

    public function edit($id)
    {
        if ($this->request->getPost('ubahpassword')) {
            $data = array(
                'nama_petugas' => $this->request->getPost('nama_petugas'),
                'username' => $this->request->getPost('username'),
                'telp' => $this->request->getPost('telp'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'level' => $this->request->getPost('levle'),
            );
        } else {
            $data = array(
                'nama_petugas' => $this->request->getPost('nama_petugas'),
                'username' => $this->request->getPost('username'),
                'telp' => $this->request->getPost('telp'),
                'level' => $this->request->getPost('level'),
            );
        }
        $this->petugass->update($id, $data);
        session()->setFlashdata('message', 'Data user berhasil di edit');
        return redirect('petugas')->with('Sukses nihh!!!', 'update berhasil');
    }
    public function delete($id)
    {
        $this->petugass->delete($id);
        session()->setFlashdata('message', 'Data Petugas Berhasil Dihapus');
        return redirect('petugas');
    }
}