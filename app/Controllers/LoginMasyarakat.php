<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MasyarakatModel;
class LoginMasyarakat extends BaseController{

    protected $masyarakats;
    function __construct()
    {
        $this->masyarakats = new MasyarakatModel();
    }
    public function loginmasyarakat()
    {
        $masyarakats = new MasyarakatModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $datamasyarakat = $masyarakats->where([
            'username' => $username,
        ])->first();
        d($datamasyarakat);
        if($datamasyarakat) {
            if(password_verify($password, $datamasyarakat['password'])) {
                session()->set(
                    [
                        'username' => $datamasyarakat['username'],
                        'nama' => $datamasyarakat['nama'],
                        'nik'=>$datamasyarakat['nik'],
                        'telp'=>$datamasyarakat['telp'],
                        'logged_in' => true, 
                        'id_masyarakat'=>$datamasyarakat['id_masyarakat']
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