<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('r_menus')->insert(
            [
                [
                    'name' => 'Cheese Pizza',
                    'description' => Str::random('100'),
                    'category' => 'Pizza',
                    'image' => 'no-image.jpg',
                    'price' => '4.50'
                ],
                [
                    'name' => 'Meat Pizza',
                    'description' => Str::random('100'),
                    'category' => 'Pizza',
                    'image' => 'no-image.jpg',
                    'price' => '5.75'
                ],
                [
                    'name' => 'American Pizza',
                    'description' => Str::random('100'),
                    'category' => 'Pizza',
                    'image' => 'no-image.jpg',
                    'price' => '6.50'
                ],
                [
                    'name' => 'Supreme Pizza',
                    'description' => Str::random('100'),
                    'category' => 'Pizza',
                    'image' => 'no-image.jpg',
                    'price' => '7.00'
                ],
                [
                    'name' => 'Tuna Salmon Pizza',
                    'description' => Str::random('100'),
                    'category' => 'Pizza',
                    'image' => 'no-image.jpg',
                    'price' => '5.50'
                ],
                [
                    'name' => 'Supreme Pizza',
                    'description' => Str::random('100'),
                    'category' => 'Pizza',
                    'image' => 'no-image.jpg',
                    'price' => '6.25'
                ],
                [
                    'name' => 'Pepperoni Pizza',
                    'description' => Str::random('100'),
                    'category' => 'Pizza',
                    'image' => 'no-image.jpg',
                    'price' => '5.35'
                ],
                [
                    'name' => 'Vegetarian Pizza',
                    'description' => Str::random('100'),
                    'category' => 'Pizza',
                    'image' => 'no-image.jpg',
                    'price' => '4.75'
                ],
                [
                    'name' => 'Orange Juice',
                    'description' => Str::random('100'),
                    'category' => 'Drinks',
                    'image' => 'no-image.jpg',
                    'price' => '1.30'
                ],
                [
                    'name' => 'Lychee Juice',
                    'description' => Str::random('100'),
                    'category' => 'Drinks',
                    'image' => 'no-image.jpg',
                    'price' => '1.30'
                ],
                [
                    'name' => 'Indonesian Coffee',
                    'description' => Str::random('100'),
                    'category' => 'Drinks',
                    'image' => 'no-image.jpg',
                    'price' => '2.15'
                ]
            ]
        );
    }
}
