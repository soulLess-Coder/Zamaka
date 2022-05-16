<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'contact_number',
    ];

    //TODO: remove this when we integrate things
    protected $attributes = [
        'property_id' => 1,
    ];
}
