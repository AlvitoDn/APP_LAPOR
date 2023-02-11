<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('TampilanMasyarakat/dashboardM');
    }
    public function admin()
    {
        return view('TampilanPetugas/dashboard');
    }
}
