<?php

namespace App\Controllers;

class Perpustakaansmit extends BaseController
{
    function __construct()
    {
        //$this->model = new \App\Models\ModelBuku();
    }
    public function Tambah()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
           'Kode Buku' => [
               'label' => 'Kode Buku',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter 4'
               ]
            ], 
            'Judul Buku' => [
               'label' => 'Judul Buku',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter 4 karakter'
               ]
            ],
            'Kategori Buku' => [
               'label' => 'Kategori Buku',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter 4 karakter'
               ]
            ],
            'Pengarang' => [
               'label' => 'Pengarang',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter 4 karakter'
               ]
            ],
            'Penerbit' => [
               'label' => 'Penerbit',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter 4 karakter'
               ]
            ],
            'Tahun Terbit' => [
               'label' => 'Tahun Terbit',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter 4 karakter'
               ]
            ],
            'Jumlah Halaman' => [
               'label' => 'Jumlah Halaman',
               'rules' => 'required|min_Length[1]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Masukkan angka'
               ]
            ],
            'Jumlah Eksemplar' => [
               'label' => 'Jumlah Eksemplar',
               'rules' => 'required|min_Length[1]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Masukkan Angka'
               ]
            ],
            'Nomor ISBN' => [
               'label' => 'Nomor ISBN',
               'rules' => 'required|min_Length[1]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Masukkan angka'
               ]
            ],
        ];
        
        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
           $Kode_Buku = $this->request->getPost('Kode Buku');
           $Judul_Buku = $this->request->getPost('Judul Buku');
           $Kategori_Buku = $this->request->getPost('Kategori Buku'); 
           $Pengarang = $this->request->getPost('Pengarang');
           $Penerbit = $this->request->getPost('Penerbit');
           $Tahun_Terbit = $this->request->getPost('Tahun Terbit');
           $Jumlah_Halaman = $this->request->getPost('Jumlah Halaman');
           $Jumlah_Eksemplar = $this->request->getPost('Jumlah Eksemplar');
           $Nomor_ISBN = $this->request->getPost('Nomor ISBN');

           $hasil['sukses'] = "Data Berhasil ditambah";
           $hasil['error'] = true;
        } else {
            $hasil['sukses'] = false;
            $hasil['error'] = $validasi->listErrors();
        }
    

        return json_encode($hasil); 
    }
    public function index()
    {
        return view('perpustakaansmit_view');
    }
}
