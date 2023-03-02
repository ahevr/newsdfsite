<?php

namespace App\Models\Admin;

use App\Helper\urlHelper;
use App\Models\Category;
use App\Models\ProductImageModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;

class Product extends Model
{


    use Searchable;

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            "kod" => $this->kod
        ];
    }



    protected $table = "products";

    protected $guarded = [];

    public function setImageAttribute($value){
        if($value) {
            $file =$value;
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('build/upload/product/', $filename);
            $this->attributes['image'] = $filename;
        }
    }

    public function products_image(){
        return $this->hasMany(ProductImageModel::class,'products_id','id');
    }


    protected $with = ["category"];

    public function category(){

        return $this->belongsTo(Category::class);

    }

    public static function boot(){

        parent::boot();

        static::creating(function ($model) {
            $model->update_by  = 0;
            $model->created_by = Auth::guard("web")->id();
            $model->url        = urlHelper::permalink($model->name);
        });

    }

    
}
