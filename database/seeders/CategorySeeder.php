<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'concours'
            ],
            [
                'id' => 2,
                'name' => 'certification'
            ],
            [
                'id' => 3,
                'name' => 'VAE'
            ],
        ]);
    }
}
