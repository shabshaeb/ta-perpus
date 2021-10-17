<?php

namespace App\Models;

use Codeigniter\Model;

class ModelPerpustakaan extends Model
{
    protected $table = "Peminjaman_Buku";
    protected $primaryKey = "Kode_Peminjaman";
    protected $foreignKey = "Kode_Buku";
    protected $allowedFields = ['Nama_Siswa','Kelas','Judul_Buku','Tanggal_Pengambilan'];
}