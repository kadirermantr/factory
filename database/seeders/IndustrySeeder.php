<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Industry::insert([
            ['name' => 'Steel'],
            ['name' => 'Glass'],
            ['name' => 'Food'],
            ['name' => 'Building'],
            ['name' => 'Textile'],
        ]);
    }
}
