<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run():void
    {
        Brand::factory(20)->create();

        Product::factory(20)
            ->hasAttached(Category::factory(rand(1, 3)))
            ->create();
    }
}
