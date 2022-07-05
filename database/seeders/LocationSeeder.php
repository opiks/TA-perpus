<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name' => 'Lantai 1 Ruang A'
        ]);
        Location::create([
            'name' => 'Lantai 1 Ruang B'
        ]);
        Location::create([
            'name' => 'Lantai 1 Ruang C'
        ]);
    }
}
