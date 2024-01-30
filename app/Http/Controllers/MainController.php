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
            // 'posts' => Post::get()->sortBy('created_at')
        ]);
    }

    // Static Pages
    public function page_abouts(){
        return view('tmp.sait.page.abouts.view');
    }
    public function page_contacts(){}
    public function page_documents(){
        return view('tmp.sait.page.docs.view');
    }
    public function page_price(){
        return view('tmp.sait.page.price.view');
    }
    public function page_timeToWork(){
        return view('tmp.sait.page.timetowork.view');
    }
    public function page_supports(){
        return view('tmp.sait.page.supports.view');
    }
}
