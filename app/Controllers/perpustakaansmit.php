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
           'Kode_Buku' => [
               'label' => 'Kode Buku',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter 4'
               ]
            ], 
            'Judul_Buku' => [
               'label' => 'Judul Buku',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter 4 karakter'
               ]
            ],
            'Kategori_Buku' => [
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
            'Tahun_Terbit' => [
               'label' => 'Tahun Terbit',
               'rules' => 'required|min_Length[4]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Minimum karakter 4 karakter'
               ]
            ],
            'Jumlah_Halaman' => [
               'label' => 'Jumlah Halaman',
               'rules' => 'required|min_Length[1]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Masukkan angka'
               ]
            ],
            'Jumlah_Eksemplar' => [
               'label' => 'Jumlah Eksemplar',
               'rules' => 'required|min_Length[1]',
               'errors' => [
                   'required' => '{field} belum diisi',
                   'min_length' => 'Masukkan Angka'
               ]
            ],
            'Nomor_ISBN' => [
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
           $Kode_Buku = $this->request->getPost('Kode_Buku');
           $Judul_Buku = $this->request->getPost('Judul_Buku');
           $Kategori_Buku = $this->request->getPost('Kategori_Buku'); 
           $Pengarang = $this->request->getPost('Pengarang');
           $Penerbit = $this->request->getPost('Penerbit');
           $Tahun_Terbit = $this->request->getPost('Tahun_Terbit');
           $Jumlah_Halaman = $this->request->getPost('Jumlah_Halaman');
           $Jumlah_Eksemplar = $this->request->getPost('Jumlah_Eksemplar');
           $Nomor_ISBN = $this->request->getPost('Nomor_ISBN');
           
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
