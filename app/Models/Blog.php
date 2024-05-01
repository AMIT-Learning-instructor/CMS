<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable =[

        'title','content','image','category_id'
    ];

    function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    function get_image_url(){
        return url("images/blogs/$this->image");
    }
}
