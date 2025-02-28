<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Automoviles;

class AutomovilesSeeder extends Seeder
{
    public function run()
    {
        Automoviles::factory(50)->create(); 
    }
}

