<?php

namespace App\Models;

use Codeigniter\Model;

class ModelPerpustakaan extends Model
{
    protected $table = "Buku";
    protected $primaryKey = "Kode_Buku";
    protected $allowedFields = ['Judul_Buku','Kategori_Buku','Pengarang','Penerbit','Tahun_Terbit','Jumlah_Halaman','Jumlah_Eksemplar','Nomor_ISBN','Keterangan'];
}

