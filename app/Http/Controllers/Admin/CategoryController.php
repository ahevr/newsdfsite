<?php

namespace App\Http\Controllers\Admin;

use App\Helper\urlHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $allCategories  = Category::all();
        // $categories     = Category::where('parent_id', 0)->get();
        $categories     = Category::whereParent_id(1)->get();
        return view("app.admin.page.category.index")
            ->with("categories",$categories)
            ->with("allCategories",$allCategories);

    }
    public function store(Request $request){

        $request->validate(["name" => "required|min:2|max:100",]);

        $input = $request->all();

        $input['parent_id'] = empty($input['parent_id']) ? 1 : $input['parent_id'];

        $input["url"] = urlHelper::permalink($request->name);

        $input["image"] = $request->image;

        // $katalog->image = $request->image;

        Category::create($input);

        return back()->with("toast_success","Kategori Başarılı Bir Şekilde Eklendi");

    }

    public function edit($id){

        $category = Category::findOrFail($id);
        return view("app.admin.page.category.edit",["category"=>$category]);

    }

    public function update(Request $request,$id){


        $category = Category::findOrFail($id);
        $category->fill($request->all());
        $category->update();

        return redirect("admin/category")->with("toast_success","$request->name". " Adlı Kategori Başarılı Bir Şekilde Güncellendi");
    }

    public function delete($id){

        $category = Category::findOrFail($id);

        $category->delete();

        return back()->with("toast_success","Kategori Başarılı Bir Şekilde Silindi");

    }

    public function deleteSub($id){

        $category = Category::findOrFail($id);

        $category->delete();

        return back()->with("toast_success","Alt Kategori Başarılı Bir Şekilde Silindi");

    }
}
