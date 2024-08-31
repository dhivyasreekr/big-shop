<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $companies = [
            [
                'name' => 'Sri Abirami Stores',
                'user_id' => 1
            ],
            [
                'name' => 'CKR Stores',
                'user_id' => 2
            ],
            
        ];

        foreach ($companies as $row){
            Company::create($row);
        }
    }
}
