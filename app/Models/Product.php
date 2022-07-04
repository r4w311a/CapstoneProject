<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
