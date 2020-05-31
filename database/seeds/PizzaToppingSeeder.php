<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('r_pizza_toppings')->insert(
            [
                [
                    'name' => 'Extra Cheese',
                    'category' => 'Topping',
                    'image' => 'no-image.jpg',
                    'price' => '1.00'
                ],
                [
                    'name' => 'Extra Meat',
                    'category' => 'Topping',
                    'image' => 'no-image.jpg',
                    'price' => '1.25'
                ],
                [
                    'name' => 'Cheese Crust',
                    'category' => 'Crust',
                    'image' => 'no-image.jpg',
                    'price' => '1.25'
                ],
                [
                    'name' => 'Sausage Crust',
                    'category' => 'Crust',
                    'image' => 'no-image.jpg',
                    'price' => '1.75'
                ],
            ],
        );
    }
}
