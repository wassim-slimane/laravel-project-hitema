<?php

namespace Database\Seeders;

use App\Models\ChapterFormation;
use Illuminate\Database\Seeder;

class ChapterFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChapterFormation::factory()->count(10)->create();
    }
}
