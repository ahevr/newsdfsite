<?php

namespace App\Models;

use App\Helper\urlHelper;
use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    protected $table = "sliders";
    protected $guarded = [];

    public function setImageAttribute($value){
        if($value) {
            $file =$value;
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('build/upload/slider/', $filename);
            $this->attributes['image'] = $filename;
        }
    }

    public static function boot(){

        parent::boot();

        static::creating(function ($model) {
            $model->isActive = 1;
            $model->url= urlHelper::permalink($model->title);
        });

    }
}
