<?php

namespace Database\Seeders;

use App\Models\Pin;
use Illuminate\Database\Seeder;

class PinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pin::factory(20)->create();
    }
}
