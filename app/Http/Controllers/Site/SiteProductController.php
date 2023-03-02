<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Category;
use App\Models\Katalog;
use App\Models\ProductImageModel;
use Illuminate\Support\Facades\Cache;

class SiteProductController extends Controller
{
    public function index(){

        // $product = Product::where("created_by",1);
        $product = Product::whereCreated_by(1);
        // $categories = Category::where("parent_id",1)->get();
        $categories = Category::whereParent_id(1)->get();
        
        switch (strip_tags(trim(request('sort')))) {
            case 'a_to_z':
                $product->orderBy("id", "ASC");
                break;
            case 'z_to_a':
                $product->orderBy("id", "DESC");
                break;
            default:
                $product->orderBy("id", "DESC");
                break;
        }

        $product = $product->orderBy("id","ASC")->paginate(16);

        // Cache ile Getir

        // $product = Cache::remember('product',30, function () {
        //     return Product::paginate(16);
        // });

        // return response()->json($product, 200);

        $katalog = Katalog::orderBy("id","DESC")->get();

        return view("app.site.page.product.index",["product"=>$product,"katalog"=>$katalog,"categories"=>$categories]);

    }

    public function productDetail ($url){

        $productDetail = Product::with("products_image")->where("url",$url)->firstOrFail();

        $katalog = Katalog::orderBy("id","DESC")->get();

       

        return view("app.site.page.product.detail",["productDetail"=>$productDetail, "katalog" => $katalog]);

        //  old vers
        // $productImageDetail = ProductImageModel::where("url",$url)->join("products","products.id","=","products_image.products_id")->get();
        // $katalog = Katalog::orderBy("id","DESC")->get();
        // return view("app.site.page.product.detail",["productDetail"=>$productDetail,"productImageDetail" => $productImageDetail, "katalog" => $katalog]);
       
    }

    
}
