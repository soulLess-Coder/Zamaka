<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenancyApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'cnic_number',
        'cnic_image',
        'contact_number',
        ];

    protected $attributes = [
        'property_id' => 1,
        'user_id' => 1,
        'application_status' => 'pending'
    ];
}
