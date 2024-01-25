<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index_page()
    {
        return view('tmp.sait.page.home.blade');
    }

    // Non static Pages

    public function about_page(){}
    public function contact_page(){}
    public function documents_page(){}
    public function price_page(){}
    public function worktime_page(){}
}
