<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Category;
use App\Models\Katalog;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SiteDashboardController extends Controller
{
    public function index(){
        $slider = Slider::where("isActive",1)->get();
        // $slider = Slider::whereisActive("1")->get();
        $katalog = Katalog::orderBy("id","DESC")->get();
        // $kategoriler=Category::where('parent_id', '=', 1)->get();
        $kategoriler=Category::whereParent_id(1)->get();

        $randomProductGet = Product::inRandomOrder()->limit(6)->get();
        return view("app.site.page.dashboard.index",["slider" => $slider,"katalog"=>$katalog,"kategoriler"=>$kategoriler,"randomProductGet" => $randomProductGet]);
    }



    public function searchTitle(Request $request){

        $term = $request->input("term");

        // $rows = Product::where("name","like","%" .$term. "%")->pluck('name', 'id');

        //image bir şekilde veri çekme
        $rows = Product::where("name","like","%" .$term. "%")->select(array('name', 'id', 'image','url'))->get();


        echo $rows;


        // $result = $rows->toArray();

        // return json_encode($result);
    }

    

}