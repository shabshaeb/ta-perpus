<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBuku extends Model
{
    protected $table = "buku";
    //protected $primaryKey = "Kode_Buku";
    protected $allowedFields = ['Kode_Buku','Judul_Buku','Kategori_Buku','Pengarang','Penerbit','Tahun_Terbit','Jumlah_Halaman','Jumlah_Eksemplar','Nomor_ISBN'];
}

