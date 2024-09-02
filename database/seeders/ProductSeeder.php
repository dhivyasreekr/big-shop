<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products= [
            [
            'name' => 'Apple',
            'description' => 'abcd',
            'price' => 100,
            'category_id' => 1,
            'brand_id' => 6,
            // 'product_label' => 'Sale',
            // 'product_tag' => 
            // 'product_collection' => 'Special Offers',
            'qty' => 150,
            'alert_stock' => 10,
            // 'Stock_status' => 'InStock'
        ],
        [
            'name' => 'Eggs',
            'description' => 'xyz',
            'price' => 6,
            'category_id' => 2,
            'brand_id' => 6,
            // 'product_label' => 'Sale',
            // 'product_tag' => 
            // 'product_collection' => 'Special Offers',
            'qty' => 500,
            'alert_stock' => 100,
            // 'Stock_status' => 'InStock'
        ],
        
    ];

        foreach ($products as $row)
        {
            Product::create($row);
        }
        
    }
}