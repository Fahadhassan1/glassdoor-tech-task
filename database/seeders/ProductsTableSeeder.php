<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Wireless Mouse',
                'price' => 25.99,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bluetooth Speaker',
                'price' => 45.99,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gaming Keyboard',
                'price' => 75.99,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone Stand',
                'price' => 15.99,
                'category' => 'Accessories',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'USB-C Hub',
                'price' => 35.99,
                'category' => 'Accessories',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Noise Cancelling Headphones',
                'price' => 125.99,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Portable Charger',
                'price' => 29.99,
                'category' => 'Accessories',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartwatch',
                'price' => 199.99,
                'category' => 'Wearables',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fitness Tracker',
                'price' => 99.99,
                'category' => 'Wearables',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laptop Stand',
                'price' => 49.99,
                'category' => 'Accessories',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wireless Charger',
                'price' => 39.99,
                'category' => 'Accessories',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '4K Monitor',
                'price' => 299.99,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mechanical Keyboard',
                'price' => 89.99,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ergonomic Chair',
                'price' => 199.99,
                'category' => 'Furniture',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desk Lamp',
                'price' => 29.99,
                'category' => 'Furniture',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'External Hard Drive',
                'price' => 79.99,
                'category' => 'Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Webcam',
                'price' => 59.99,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Microphone',
                'price' => 99.99,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Graphic Tablet',
                'price' => 149.99,
                'category' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smart Light Bulb',
                'price' => 19.99,
                'category' => 'Home Automation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}