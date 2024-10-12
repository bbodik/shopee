<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Modern Chair',
                'price' => 180,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product1.jpg",
                    "product2.jpg",
                    "product3.jpg",
                    "product4.jpg",
                    "1.jpg",
                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Vintage Chair',
                'price' => 100,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product3.jpg",
                    "product4.jpg",
                    "product1.jpg",
                    "product2.jpg",
                    "2.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Table',
                'price' => 300,
                'delivery_price' => 0,
                'availability' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product5.jpg",
                    "product6.jpg",
                    "3.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 2)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Chair',
                'price' => 180,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product1.jpg",
                    "product2.jpg",
                    "product3.jpg",
                    "product4.jpg",
                    "1.jpg",
                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Vintage Chair',
                'price' => 100,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product3.jpg",
                    "product4.jpg",
                    "product1.jpg",
                    "product2.jpg",
                    "2.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Table',
                'price' => 300,
                'delivery_price' => 0,
                'availability' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product5.jpg",
                    "product6.jpg",
                    "3.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 2)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Chair',
                'price' => 180,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product1.jpg",
                    "product2.jpg",
                    "product3.jpg",
                    "product4.jpg",
                    "1.jpg",
                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Vintage Chair',
                'price' => 100,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product3.jpg",
                    "product4.jpg",
                    "product1.jpg",
                    "product2.jpg",
                    "2.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Table',
                'price' => 300,
                'delivery_price' => 0,
                'availability' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product5.jpg",
                    "product6.jpg",
                    "3.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 2)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Chair',
                'price' => 180,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product1.jpg",
                    "product2.jpg",
                    "product3.jpg",
                    "product4.jpg",
                    "1.jpg",
                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Vintage Chair',
                'price' => 100,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product3.jpg",
                    "product4.jpg",
                    "product1.jpg",
                    "product2.jpg",
                    "2.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Table',
                'price' => 300,
                'delivery_price' => 0,
                'availability' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product5.jpg",
                    "product6.jpg",
                    "3.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 2)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Chair',
                'price' => 180,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product1.jpg",
                    "product2.jpg",
                    "product3.jpg",
                    "product4.jpg",
                    "1.jpg",
                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Vintage Chair',
                'price' => 100,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product3.jpg",
                    "product4.jpg",
                    "product1.jpg",
                    "product2.jpg",
                    "2.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Table',
                'price' => 300,
                'delivery_price' => 0,
                'availability' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product5.jpg",
                    "product6.jpg",
                    "3.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 2)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Chair',
                'price' => 180,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product1.jpg",
                    "product2.jpg",
                    "product3.jpg",
                    "product4.jpg",
                    "1.jpg",
                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Vintage Chair',
                'price' => 100,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product3.jpg",
                    "product4.jpg",
                    "product1.jpg",
                    "product2.jpg",
                    "2.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Table',
                'price' => 300,
                'delivery_price' => 0,
                'availability' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product5.jpg",
                    "product6.jpg",
                    "3.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 2)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Chair',
                'price' => 180,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product1.jpg",
                    "product2.jpg",
                    "product3.jpg",
                    "product4.jpg",
                    "1.jpg",
                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Vintage Chair',
                'price' => 100,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product3.jpg",
                    "product4.jpg",
                    "product1.jpg",
                    "product2.jpg",
                    "2.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Table',
                'price' => 300,
                'delivery_price' => 0,
                'availability' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product5.jpg",
                    "product6.jpg",
                    "3.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 2)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Chair',
                'price' => 180,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product1.jpg",
                    "product2.jpg",
                    "product3.jpg",
                    "product4.jpg",
                    "1.jpg",
                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Vintage Chair',
                'price' => 100,
                'delivery_price' => 0,
                'availability' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product3.jpg",
                    "product4.jpg",
                    "product1.jpg",
                    "product2.jpg",
                    "2.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 1)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
            [
                'name' => 'Modern Table',
                'price' => 300,
                'delivery_price' => 0,
                'availability' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?',
                'pictures' => json_encode([
                    "product5.jpg",
                    "product6.jpg",
                    "3.jpg",

                ]),
                'category_id' => ProductCategory::all()->where('id', 2)->first()->id,
                'brand_id' => Brand::all()->where('id', 1)->first()->id
            ],
        ];
        Product::insert($products);
    }
}
