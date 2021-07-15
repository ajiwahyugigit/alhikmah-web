<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembiyaanController extends Controller
{
    public function index()
    {
        return view('pages.pembiyaanmub');
    }

    public function beb()
    {
        return view('pages.pembiayaanbeb');
    }

    public function kbb()
    {
        return view('pages.pembiayaankbb');
    }

    public function mab()
    {
        return view('pages.pembiayaanmab');
    }

    public function uhb()
    {
        return view('pages.pembiayaanuhb');
    }
}
