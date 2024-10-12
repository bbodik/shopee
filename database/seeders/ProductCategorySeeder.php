<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Chairs'
            ],
            [
                'name' => 'Tables'
            ],
            [
                'name' => 'Beds'
            ],
            [
                'name' => 'Home Deco'
            ]
        ];
        ProductCategory::insert($categories);
    }
}
