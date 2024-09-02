<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;


use App\Models\Collection;
use App\Models\Product;

use APP\Enums\StockStatus;

use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'dhivi',
            'email' => 'dhivi@gmail.com',
            'password' => Hash::make('dhivi'),
        ]);
        

        $collections = [
            [
                'name' => 'New Arrivals',
            ],
            [
                'name' => 'Best Sellers',
            ],
            [
                'name' => 'Special Offers',
            ],

        ];

        foreach ($collections as $row){
            Collection::create($row);
        }

        $roles = [
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Customer'
            ],
            [
                'name' => 'Dellivery'
            ],
        ];

        foreach ($roles as $row)
        {
            Role::create($row);
        }

        $this->call([

            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            LabelSeeder::class,
            TagSeeder::class,
            CompanySeeder::class,
            // CollectionSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            ProductSeeder::class,



        ]);
    }
}
