<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Male'
        ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Female'
        ]);

        \App\Models\User::factory(500)->create();

        User::factory()->create([
            'first_name' => 'Joven Joshua',
            'middle_name' => 'Celiz',
            'last_name' => 'Alovera',
            'suffix_name' => null,
            'birth_date' => '1999-10-25',
            'gender_id' => 1,
            'address' => 'Roxas City',
            'contact_number' => '09123',
            'email_address' => 'jo.ven@example.com',
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);
    }
}
