<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'video',
        'amount',
    ];

    //TODO: remove this when we integrate things
    protected $attributes = [
        'property_id' => 1,
    ];
}
