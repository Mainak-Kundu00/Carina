<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function rings()
    {
        return view('rings');
    }
    public function necklaces()
    {
        return view('necklaces');
    }
    public function jewelry()
    {
        return view('jewelry');
    }
    public function sign_up()
    {
        return view('sign_up');
    }
}
