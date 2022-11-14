<?php 
namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model{
    protected $table      = 'pengaduan';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_pengaduan';
    protected $allowedFields = ['tgl_pengaduan','nik','nama','isi_laporan','foto','status'];
}