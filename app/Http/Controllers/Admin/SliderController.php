<?php

namespace App\Http\Controllers\Admin;

use App\Helper\urlHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin\SliderModel;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index(){

        $slider = Slider::latest()->paginate(10);
        return view("app.admin.page.slider.index",["slider"=>$slider]);

//        $product=  Product::orderBy("id","DESC")->paginate(10);
//        return view("app.admin.page.product.index",["product" => $product]);

    }

    public function create(){

        return view("app.admin.page.slider.create");

    }

    public function store(Request $request){

        $request->validate(["image"=> "required",]);
        $slider = new Slider();
        $slider->fill(request()->all());
        $slider->buton = ($request->buton == "on") ? 1 : 0;
        $slider->save();

        return redirect("admin/slider")->with("toast_success","$request->title". " Adlı Slider Başarılı Bir Şekilde Eklendi");
    }

    public function status($id){

        $status = Slider::select("isActive")->where("id",$id)->first();

        if ($status->isActive == "1") {
            $isActive = "0";
        } else {
            $isActive = "1";
        }
        $isStatus = array("isActive"=>$isActive);

        Slider::where("id",$id)->update($isStatus);

        return back()->with("toast_success","Durum Değiştirme Başarılı");

    }

    public function delete($id){

        $slider = Slider::findOrFail($id);
        $destination = "app/admin/uploads/slider/".$slider->image;

        if (File::exists($destination)){

            File::delete($destination);

        }
        $slider->delete();
        return back()->with("toast_success","Silme Başarılı");
    }


}
