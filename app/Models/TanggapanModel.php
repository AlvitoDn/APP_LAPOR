<?php 
namespace App\Models;

use CodeIgniter\Model;

class TanggapanModel extends Model{
    protected $table      = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';
    protected $allowedFields = ['id_pengaduan','tgl_tanggapan','tanggapan','id_petugas'];
}