<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::factory()->count(3)->create();
    }
}
