<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBuku extends Model
{
    protected $table = "buku";
    //protected $primaryKey = "Kode_Buku";
    protected $allowedFields = ['Kode_Buku','Judul_Buku','Kategori_Buku','Pengarang','Penerbit','Tahun_Terbit','Jumlah_Halaman','Jumlah_Eksemplar','Nomor_ISBN'];

    function cari($katakunci)
    {
            $builder = $this->table("buku");
            $arr_katakunci = explode(" ",$katakunci);
            for ($x = 0; $x < count($arr_katakunci); $x++) {
                $builder->like('Kode_Buku', $arr_katakunci[$x]);
                $builder->orLike('Judul_Buku', $arr_katakunci[$x]);
                $builder->orLike('Kategori_Buku', $arr_katakunci[$x]);
                $builder->orLike('Pengarang', $arr_katakunci[$x]);
                $builder->orLike('Penerbit', $arr_katakunci[$x]);
                $builder->orLike('Tahun_Terbit', $arr_katakunci[$x]);
                $builder->orLike('Jumlah_Halaman', $arr_katakunci[$x]);
                $builder->orLike('Jumlah_Eksemplar', $arr_katakunci[$x]);
                $builder->orLike('Nomor_ISBN', $arr_katakunci[$x]);
            }
            return $builder;
    }
}

