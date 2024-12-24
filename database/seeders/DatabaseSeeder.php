<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Heydar Abbas',
            'email' => 'h@mail.com',
        ]);

        $this->call([
            CitySeeder::class,
            CategorySeeder::class,
        ]);
    }
}
