<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MultiImg extends Model
{
    use SoftDeletes;

    protected $guarded = [];

}
