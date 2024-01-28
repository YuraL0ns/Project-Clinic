<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Post;
use App\Models\Razdel;
use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index_page()
    {
        return view('tmp.sait.page.home.blade',
        [
            'razdels' => Razdel::all(),
            'doctors' => Doctor::get()->random(10),
            'posts' => Post::get()->sortBy('created_at')
        ]);
    }

    // Non static Pages

    public function about_page(){}
    public function contact_page(){}
    public function documents_page(){}
    public function price_page(){}
    public function worktime_page(){}
}
