<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Category;
use App\Models\Katalog;

class SiteCategoryController extends Controller
{
    public function index($url){

        $categoriGetAll = Category::all();

        $categoriess = Category::where("url",$url)->firstOrFail();

        $product  = Product::whereIn("category_id",$categoriess)->paginate(16);

        // $categories  = Category::where('parent_id',1)->get();
        $categories     = Category::whereParent_id(1)->get();

        $katalog = Katalog::orderBy("id","DESC")->get();

        return view("app.site.page.kategoriler.index")
            ->with("product",$product)
            ->with("categories",$categories)
            ->with("categoriess",$categoriess)
            ->with("categoriGetAll",$categoriGetAll)
            ->with("katalog",$katalog);
            
    }
}
