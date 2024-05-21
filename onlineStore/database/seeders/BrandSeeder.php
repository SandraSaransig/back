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
        //Para generar las marcas, en este caso Mercedes y BMW
        Brand::create([
            'name' => 'BMW'
        ]);
        Brand::create([
            'name' => 'Mercedes'
        ]);
    }
}
