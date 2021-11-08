<?php

namespace App\Controllers;

class Perpustakaansmit extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\ModelBuku();
    }
    public function Tambah()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
           'Kode_Buku' => [
               'label' => 'Kode Buku',
               'rules' => 'required|min_Length[4]|is_unique[buku.Kode_Buku]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter untuk {field} 4 angka',
                   'is_unique' => 'Kode Buku sudah terdaftar'
               ]
            ], 
            'Judul_Buku' => [
               'label' => 'Judul Buku',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter untuk {field} 4 huruf'
               ]
            ],
            'Kategori_Buku' => [
               'label' => 'Kategori Buku',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter untuk {field} 4 huruf'
               ]
            ],
            'Pengarang' => [
               'label' => 'Pengarang',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter untuk {field} 4 huruf'
               ]
            ],
            'Penerbit' => [
               'label' => 'Penerbit',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter untuk {field} 4 huruf'
               ]
            ],
            'Tahun_Terbit' => [
               'label' => 'Tahun Terbit',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter untuk {field} 4 angka'
               ]
            ],
            'Jumlah_Halaman' => [
               'label' => 'Jumlah Halaman',
               'rules' => 'required|min_Length[1]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter untuk {field} 1 angka'
               ]
            ],
            'Jumlah_Eksemplar' => [
               'label' => 'Jumlah Eksemplar',
               'rules' => 'required|min_Length[1]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter untuk {field} 1 angka'
               ]
            ],
            'Nomor_ISBN' => [
               'label' => 'Nomor ISBN',
               'rules' => 'required|min_Length[1]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter untuk {field} 4 angka'
               ]
            ],
        ];
        
        $validasi->setRules($aturan);
        //if (true){
        if ($validasi->withRequest($this->request)->run()) {
           $Kode_Buku = $this->request->getPost('Kode_Buku');
           $Judul_Buku = $this->request->getPost('Judul_Buku');
           $Kategori_Buku = $this->request->getPost('Kategori_Buku'); 
           $Pengarang = $this->request->getPost('Pengarang');
           $Penerbit = $this->request->getPost('Penerbit');
           $Tahun_Terbit = $this->request->getPost('Tahun_Terbit');
           $Jumlah_Halaman = $this->request->getPost('Jumlah_Halaman');
           $Jumlah_Eksemplar = $this->request->getPost('Jumlah_Eksemplar');
           $Nomor_ISBN = $this->request->getPost('Nomor_ISBN');

        //     $Judul_Buku = 'asdf';
        //    $Kategori_Buku = 'asdfg';
        //    $Pengarang = 'sdfgsd';
        //    $Penerbit = 'asdfasdfg';
        //    $Tahun_Terbit = '1234';
        //    $Jumlah_Halaman = '123';
        //    $Jumlah_Eksemplar = '1234';
        //    $Nomor_ISBN = '234';

           $data = [
               'Kode_Buku' => $Kode_Buku,
               'Judul_Buku' => $Judul_Buku,
               'Kategori_Buku' => $Kategori_Buku,
               'Pengarang' => $Pengarang,
               'Penerbit' => $Penerbit,
               'Tahun_Terbit' => $Tahun_Terbit,
               'Jumlah_Halaman' => $Jumlah_Halaman,
               'Jumlah_Eksemplar' => $Jumlah_Eksemplar,
               'Nomor_ISBN' => $Nomor_ISBN
           ];

           $this->model->insert($data);
           
           $hasil['sukses'] = "Data berhasil diinputkan";
           $hasil['error'] = false;
        //} else if ($this->db->error() != null){
            
          //  $hasil['sukses'] = false;
            //$hasil['error'] = $this->db->error();
        }else {
            $hasil['sukses'] = false;
            $hasil['error'] = $validasi->listErrors();
        }
    //echo 'test';
        return json_encode($hasil); 
    }
    public function index()
    {
        return view('perpustakaansmit_view');
    }
}
