<?php

namespace App\Controllers;

class Perpustakaansmit extends BaseController
{
    function __construct()
    {
        //$this->model = new \App\Models\ModelBuku();
    }
    public function tambah()
    {
        return "saya dari fungsi Tambah";
    }
    public function index()
    {
        return view('perpustakaansmit_view');
    }
}
