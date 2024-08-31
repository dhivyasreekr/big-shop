<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple'],
            ['name' => 'hp'],
            ['name' => 'Hatsun'],
            ['name' => 'Classmate'],
            ['name' => 'Nestle'],
            ['name' => 'A2B'],
        ];

        foreach ($brands as $row){
            Brand::create($row);
        }

       

    }
}
