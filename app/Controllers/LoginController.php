<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PetugasModel;
use App\Models\MasyarakatModel;

class LoginController extends BaseController{
    protected $petugass,$masyarakats;

    function __construct(){
        $this->masyarakats = new MasyarakatModel();
    }

    public function index()
    {
        return view('loginview');
    }

    public function login()
    {
        $petugass = new PetugasModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $dataPetugass = $petugass->where(['username' => $username])->first();
        d($dataPetugass);
        if($dataPetugass) {
            if(password_verify($password, $dataPetugass['password'])) {
                session()->set(
                    [
                        'username' => $dataPetugass['username'],
                        'nama_petugas' => $dataPetugass['nama_petugas'],
                        'level'=>$dataPetugass['level'],
                        'id_petugas'=>$dataPetugass['id_petugas'],
                        'logged_in' => true 
                        ]
                );
                return $this->response->redirect('/');
            } else {
                session()->setFlashdata('gagal','Username atau Password salah');
                return $this->response->redirect('/login');
            }
        } else {
            session()->setFlashdata('gagal','Username tidak ditemukan');
            return $this->response->redirect('/login');
        }
    }
    function logout(){
        session()->destroy();
        return $this->response->redirect('/login');
    }

    //Register
    public function register(){
        return view('registerview');
    }

    public function registeruser(){
        $this->masyarakats->insert([
            'nik'=>$this->request->getPost('nik'),
            'nama'=>$this->request->getPost('nama'),
            'username'=>$this->request->getPost('username'),
            'password'=>password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
            'telp'=>$this->request->getPost('telp')
        ]);
        return redirect('login');
    }
}