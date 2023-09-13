<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home_v');
    }
    public function about()
    {
        return view('about_v');
    }
    public function manufactur()
    {
        return view('manufactur_v');
    }
    public function wwd()
    {
        return view('wwd_v');
    }
}
