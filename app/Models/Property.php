<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address;

class Property extends Model
{
    use HasFactory;

    protected Address $address;

    protected $fillable = [
        'description',
        'landmarks',
        'property_size',
        'image',
        'video',
        'lease_price',
        'build_year',
        'street',
        'house_number',
        'sector',
        'mohala',
        'nearest_landmark',
        'city'
    ];

    protected $attributes = [
        'category_id' => 1,
    ];
    public function wishlist(){
        return $this->hasMany(Wishlist::class);
     }
}
