<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Katalog;
use Illuminate\Http\Request;

class SiteContactController extends Controller
{
    public function index () {


        $katalog = Katalog::orderBy("id","DESC")->get();
        return view("app.site.page.contact.index",["katalog"=>$katalog]);

    }
}
