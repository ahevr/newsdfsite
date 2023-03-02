<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Katalog;
use Illuminate\Http\Request;

class SiteAboutusController extends Controller
{
    public function index ()
    {
        $katalog = Katalog::orderBy("id","DESC")->get();
        return view("app.site.page.aboutus.index",["katalog"=>$katalog]);
    }
}
