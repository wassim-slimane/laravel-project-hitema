<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::factory()->count(10)->create();

        DB::table('contents')
            ->where('id', 1)
            ->update([
                'type_content' => 'cours',
            ]);
        DB::table('contents')
            ->where('id', 2)
            ->update([
                'type_content' => 'cours',
            ]);
        DB::table('contents')
            ->where('id', 3)
            ->update([
                'type_content' => 'cours',
            ]);
        DB::table('contents')
            ->where('id', 4)
            ->update([
                'type_content' => 'exercice',
            ]);
        DB::table('contents')
            ->where('id', 5)
            ->update([
                'type_content' => 'exercice',
            ]);
        DB::table('contents')
            ->where('id', 6)
            ->update([
                'type_content' => 'exercice',
            ]);
        DB::table('contents')
            ->where('id', 7)
            ->update([
                'type_content' => 'examen',
            ]);
        DB::table('contents')
            ->where('id', 8)
            ->update([
                'type_content' => 'examen',
            ]);
        DB::table('contents')
            ->where('id', 9)
            ->update([
                'type_content' => 'examen',
            ]);
        DB::table('contents')
            ->where('id', 10)
            ->update([
                'type_content' => 'examen',
            ]);
    }
}
