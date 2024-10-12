<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            [
                'name' => 'Amado'
            ],
            [
                'name' => 'Ikea'
            ],
            [
                'name' => 'Furniture inc'
            ],
            [
                'name' => 'The factory'
            ],
            [
                'name' => 'Artdeco'
            ],
        ];
        Brand::insert($brands);
    }
}
