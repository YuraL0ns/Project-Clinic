<?php

namespace App\Http\Controllers;

use App\Models\Razdel;
use App\Models\Service;
use Illuminate\Support\Facades\DB;


class ServicesController extends Controller
{
    public function getServicesList()
    {
        return view('tmp.sait.page.services.list', [
            'razdels' => Razdel::all(),
            ]);
    }
    public function getRazdelData($razdel_alias)
    {
        $getCat = Razdel::where('razdel_alias', $razdel_alias)->first()->id;
        $getCatAlias = Razdel::where('razdel_alias', $razdel_alias)->first()->razdel_alias;

        $showAllService = DB::table('services')->where('razdel_id', '=', $getCat)->get();

        return view('tmp.sait.page.services.show.razdel', [
            'showAllService' => $showAllService,
            'getCatAlias' => $getCatAlias
        ]);
    }

    public function getServicesInfo(Service $service, $razdel_alias, $service_alias)
    {
        $service = Service::where('service_alias', $service_alias)->first();
        $service->doctor();
        return view('tmp.sait.page.services.showInfo', compact('service'))->with('service_alias', $service_alias);
    }
}
