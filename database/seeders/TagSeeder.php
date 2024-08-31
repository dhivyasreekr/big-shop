<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Hand Bag',
            ],
            [
                'name' => 'Clothes',
            ],
            [
                'name' => 'Shoes',
            ],
            [
                'name' => 'Bags',
            ],
            [
                'name' => 'Wallet',
            ],

        ];

        foreach ($tags as $row){
            Tag::create($row);
        }
    }
}
