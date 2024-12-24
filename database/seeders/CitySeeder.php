<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        City::factory()->create([
            'name' => 'Al-Anbar',
            'image' => 'al-anbar.webp'
        ]);
        City::factory()->create([
            'name' => 'Babil',
            'image' => 'babil.webp'
        ]);
        City::factory()->create([
            'name' => 'Baghdad',
            'image' => 'baghdad.webp'
        ]);
        City::factory()->create([
            'name' => 'Basra',
            'image' => 'basra.webp'
        ]);
        City::factory()->create([
            'name' => 'Dhi-Qar',
            'image' => 'dhi-qar.webp'
        ]);
        City::factory()->create([
            'name' => 'Al-Qadisiyyah',
            'image' => 'al-qadisiyyah.webp'
        ]);
        City::factory()->create([
            'name' => 'Diyala',
            'image' => 'diyala.webp'
        ]);
        City::factory()->create([
            'name' => 'Duhok',
            'image' => 'duhok.webp'
        ]);
        City::factory()->create([
            'name' => 'Erbil',
            'image' => 'erbil.webp'
        ]);
        City::factory()->create([
            'name' => 'Karbala',
            'image' => 'karbala.webp'
        ]);
        City::factory()->create([
            'name' => 'Kirkuk',
            'image' => 'kirkuk.webp'
        ]);
        City::factory()->create([
            'name' => 'Maysan',
            'image' => 'maysan.webp'
        ]);
        City::factory()->create([
            'name' => 'Muthanna',
            'image' => 'muthanna.webp'
        ]);
        City::factory()->create([
            'name' => 'Najaf',
            'image' => 'najaf.webp'
        ]);
        City::factory()->create([
            'name' => 'Ninawa',
            'image' => 'ninawa.webp'
        ]);
        City::factory()->create([
            'name' => 'Salah Al-Din',
            'image' => 'salah-al-din.webp'
        ]);
        City::factory()->create([
            'name' => 'Sulaymaniyah',
            'image' => 'sulaymaniyah.webp'
        ]);
        City::factory()->create([
            'name' => 'Halabja ',
            'image' => 'halabja.webp'
        ]);
        City::factory()->create([
            'name' => 'Wasit',
            'image' => 'wasit.webp'
        ]);
    }
}
