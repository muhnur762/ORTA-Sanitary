<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landingPage_v');
    }
    public function manufactur()
    {
        return view('manufactur_v');
    }
}
