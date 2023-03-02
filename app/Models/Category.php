<?php

namespace App\Models;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    
    protected $guarded = [];

        // public function category_id(){

        //     return $this->hasOne(Product::class, 'category_id', 'id');

        // }

    public function childs() {

        return $this->hasMany(Category::class,'parent_id','id') ;

    }

    public function setImageAttribute($value){
        if($value) {
            $file =$value;
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('build/upload/kategoriler/', $filename);
            $this->attributes['image'] = $filename;
        }
    }
}
