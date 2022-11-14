<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MasyarakatModel;
class MasyarakatController extends BaseController{

    protected $masyrakats;

    function __construct()
    {
        $this->masyarakats = new MasyarakatModel();
    }

    public function index(){
        $data['masyarakat'] = $this->masyarakats->findAll();
        return view('TampilanPetugas/masyarakatview',$data);
    }
}