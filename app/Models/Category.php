<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'category_name',
        'type',
        'user_id'
    ];
}
