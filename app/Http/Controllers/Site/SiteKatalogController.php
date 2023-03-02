<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SiteKatalogController extends Controller
{
    public function index (){
        
        $katalog = Katalog::orderBy("id","ASC")->get();
        
        return view("app.site.page.katalog.index",["katalog" => $katalog]);

    }

    public function detail ($url){


        $katalogDetail = Katalog::where("url",$url)->firstOrFail();
        $katalog = Katalog::orderBy("id","DESC")->get();

        return view("app.site.page.katalog.detail",["katalogDetail"=>$katalogDetail,"katalog"=>$katalog]);

        
    }


}
