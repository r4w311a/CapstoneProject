<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_id','subcategory_name', 'subcategory_slug'];

    public function Category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
