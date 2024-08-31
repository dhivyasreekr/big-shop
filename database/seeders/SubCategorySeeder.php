<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sub_categories = [
            [
                'name' => 'Fruits',
                'category_id' => 1
            ],
            [
                'name' => 'Vegetables',
                'category_id' => 1
            ],
            [
                'name' => 'Fresh herbs',
                'category_id' => 1
            ],
            [
                'name' => 'Milk',
                'category_id' => 2 
            ],
            [
                'name' => 'Cheese and Curd',
                'category_id' => 2
            ],
            [
                'name' => 'Yogurt',
                'category_id' => 2
            ],
            [
                'name' => 'Eggs',
                'category_id' => 2
            ],
            [
                'name' => 'Butter and Margarine',
                'category_id' => 2
            ],
            [
                'name' => 'Fresh meat(beef, pork, chicken, mutton)',
                'category_id' => 3
            ],
            [
                'name' => 'Seafood (fish, shrimp, shellfish, crab, prawn)',
                'category_id' => 3
            ],
            [
                'name' => 'Deli meats',
                'category_id' => 3
            ],
            [
                'name' => 'Packaged meat',
                'category_id' => 3
            ],
            [
                'name' => 'Bread',
                'category_id' => 4
            ],
            [
                'name' => 'Pastries',
                'category_id' => 4
            ],
            [
                'name' => 'Cakes and Pies',
                'category_id' => 4
            ],
            [
                'name' => 'Cookies and Biscuits',
                'category_id' => 4
            ],
            [
                'name' => 'Canned goods',
                'category_id' => 5
            ],
            [
                'name' => 'Dry pasta and grains',
                'category_id' => 5
            ],
            [
                'name' => 'Rice and Beans',
                'category_id' => 5
            ],
            [
                'name' => 'Sauces and condiments',
                'category_id' => 5
            ],
            [
                'name' => 'Spices and seasonings',
                'category_id' => 5
            ],
            [
                'name' => 'Baking supplies (flour, sugar, baking powder)',
                'category_id' => 5
            ],
            [
                'name' => 'Water',
                'category_id' => 6
            ],
            [
                'name' => 'Soft drinks',
                'category_id' => 6
            ],
            [
                'name' => 'Juices',
                'category_id' => 6
            ],
            [
                'name' => 'Coffee and Tea',
                'category_id' => 6
            ],
            [
                'name' => 'Alcoholic beverages (beer, wine, Spirits)',
                'category_id' => 6
            ],
            [
                'name' => 'Frozen vegetables and fruits',
                'category_id' => 7
            ],
            [
                'name' => 'Ice creams and Desserts',
                'category_id' => 7
            ],
            [
                'name' => 'Frozen meals',
                'category_id' => 7
            ],
            [
                'name' => 'Frozen meat and seafood',
                'category_id' => 7
            ],
            [
                'name' => 'Chips and Crisps',
                'category_id' => 8
            ],
            [
                'name' => 'Nuts and Seeds',
                'category_id' => 8
            ],
            [
                'name' => 'Popcorn',
                'category_id' => 8
            ],
            [
                'name' => 'Snack bars',
                'category_id' => 8
            ],
            [
                'name' => 'Candy and Chocolate',
                'category_id' => 8
            ],
            [
                'name' => 'Vitamins and supplements',
                'category_id' => 9
            ],
            [
                'name' => 'Organic and Natural products',
                'category_id' => 9
            ],
            [
                'name' => 'Gluten-free, vegan, and other speciality diet items',
                'category_id' => 9
            ],
            [
                'name' => 'Cleaning products',
                'category_id' => 10
            ],
            [
                'name' => 'Paper goods (toilet paper, paper towels)',
                'category_id' => 10
            ],
            [
                'name' => 'Laundry supplies',
                'category_id' => 10
            ],
            [
                'name' => 'Dishwashing supplies',
                'category_id' => 10
            ],
            [
                'name' => 'Shampoo and conditioner',
                'category_id' => 11 
            ],
            [
                'name' => 'Soap and Body wash',
                'category_id' => 11
            ],
            [
                'name' => 'Toothpaste and oral care',
                'category_id' => 11
            ],
            [
                'name' => 'Deodorants',
                'category_id' => 11
            ],
            [
                'name' => 'Skincare products',
                'category_id' => 11
            ],
            [
                'name' => 'Baby food',
                'category_id' => 12
            ],
            [
                'name' => 'Diapers and Wipes',
                'category_id' => 12
            ],
            [
                'name' => 'Baby care products',
                'category_id' => 12
            ],
            [
                'name' => 'Pet food',
                'category_id' => 13
            ],
            [
                'name' => 'Pet toys',
                'category_id' => 13
            ],
            [
                'name' => 'Pet Grooming supplies',
                'category_id' => 13
            ],
            [
                'name' => 'Asian cuisine',
                'category_id' => 14
            ],
            [
                'name' => 'Hispanic cuisine',
                'category_id' => 14
            ],
            [
                'name' => 'Europen cuisine',
                'category_id' => 14
            ],
            [
                'name' => 'Middle Eastern cuisine',
                'category_id' => 14
            ],
        ];

        foreach ($sub_categories as $row) 
        {
            SubCategory::create($row);
        }
    }
}
