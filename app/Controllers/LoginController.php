<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PetugasModel;
use App\Models\MasyarakatModel;

class LoginController extends BaseController
{
    protected $petugass, $masyarakats;

    function __construct()
    {
        $this->petugass = new PetugasModel();
        $this->masyarakats = new MasyarakatModel();
    }

    public function index()
    {
        return view('loginview');
    }

    public function admin()
    {
        return view('loginadmin');
    }

    public function loginadmin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password')."";

        $dataPetugass = $this->petugass->where([
            'username' => $username,
        ])->first();
        if ($dataPetugass) {
            if (password_verify($password, $dataPetugass['password'])) {
                session()->set(
                    [
                        'username' => $dataPetugass['username'],
                        'nama_petugas' => $dataPetugass['nama_petugas'],
                        'level' => $dataPetugass['level'],
                        'logged_in' => true,
                        'id_petugas' => $dataPetugass['id_petugas']
                    ]
                );
                return $this->response->redirect('/dashboarduser');
            } else {
                session()->setFlashdata('gagal', 'Username atau Password salah');
                return $this->response->redirect('/login');
            }
        } else {
            $dataMasyarakats = $this->masyarakats->where([
                'username' => $username,
            ])->first();
            if ($dataMasyarakats) {
                if (password_verify($password, $dataMasyarakats['password'])) {
                    session()->set(
                        [
                            'username' => $dataMasyarakats['username'],
                            'nik' => $dataMasyarakats['nik'],
                            'nama' => $dataMasyarakats['nama'],
                            'username' => $dataMasyarakats['username'],
                            'telp' => $dataMasyarakats['telp'],
                            'logged_in' => true,
                            'id_masyarakat' => $dataPetugass['id_masyarakat']
                        ]
                    );
                    return $this->response->redirect('/');
                } else {
                    session()->setFlashdata('gagal', 'Username atau Password salah');
                    return $this->response->redirect('/login');
                }
            } else {
                session()->setFlashdata('gagal', 'Username tidak ditemukan');
                return $this->response->redirect('/login-admin');
            }
        }
        function logout()
        {
            session()->destroy();
            return $this->response->redirect('/login-admin');
        }
    }
}
