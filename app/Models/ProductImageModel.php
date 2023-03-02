<?php

namespace App\Models;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ProductImageModel extends Model
{
    protected $table = "products_image";

    protected $guarded = [];

    


    public function setImageAttribute($value){
        if($value) {
            $destination = "build/upload/product/".$this->imager;
            if (File::exists($destination)){

                File::delete($destination);

            }
            $file = $value;
            $extention = $file->getClientOriginalExtension();
            $filename = time(). "." .$extention;
            $file->move("build/upload/product/",$filename);
            $this->attributes['imager'] = $filename;
        }
    }
}
