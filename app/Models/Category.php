<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='property_category';
    protected $fillable = [
        'category',
        'sub_category_id',
        'sub_category',
    ];
}
