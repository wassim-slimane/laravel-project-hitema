<?php

namespace Database\Seeders;

use App\Models\Formation;
use Database\Factories\FormationFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formation::factory()->count(10)->create();

        DB::table('formations')
            ->where('id', 1)
            ->update([
                'img' => 'formation-1.png',
            ]);
        DB::table('formations')
            ->where('id', 2)
            ->update([
                'img' => 'formation-2.png',
            ]);
        DB::table('formations')
            ->where('id', 3)
            ->update([
                'img' => 'formation-3.png',
            ]);
        DB::table('formations')
            ->where('id', 4)
            ->update([
                'img' => 'formation-4.png',
            ]);
        DB::table('formations')
            ->where('id', 5)
            ->update([
                'img' => 'formation-5.png',
            ]);
        DB::table('formations')
            ->where('id', 6)
            ->update([
                'img' => 'formation-6.png',
            ]);
        DB::table('formations')
            ->where('id', 7)
            ->update([
                'img' => 'formation-7.png',
            ]);
        DB::table('formations')
            ->where('id', 8)
            ->update([
                'img' => 'formation-8.png',
            ]);
        DB::table('formations')
            ->where('id', 9)
            ->update([
                'img' => 'formation-9.png',
            ]);
        DB::table('formations')
            ->where('id', 10)
            ->update([
                'img' => 'formation-10.png',
            ]);
    }
}
