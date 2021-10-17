<?php

namespace App\Controllers;

class perpustakaansmit extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\ModelBuku();
    }
    public function index()
    {
        return view('perpustkaansmit_view');
    }
}
