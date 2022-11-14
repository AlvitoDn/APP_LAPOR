<?php 
namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model{
    protected $table      = 'petugas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_petugas';
    protected $useAutoIncrement = true; 
    protected $allowedFields = ['nama_petugas','username','password','telp','level'];
}