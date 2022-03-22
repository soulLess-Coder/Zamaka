<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Property::class;
    public function definition()
    {
        return [
            'description' => $this->faker->realText(100),
            'landmarks' => $this->faker->company(),
            'property_size' => $this->faker->numberBetween(10,100000),
            'image' =>$this->faker->imageUrl(),
            'video'=> $this->faker->imageUrl(),
            'lease_price' => $this->faker->numberBetween(10,100000),
            'build_year' => $this->faker->year(),
            'street' => $this->faker->streetName(),
            'house_number'=> $this->faker->buildingNumber(),
            'sector'=>$this->faker->secondaryAddress(),
            'mohala'=>$this->faker->secondaryAddress(),
            'city' => $this->faker->city()
        ];
    }
}
