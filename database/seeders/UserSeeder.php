<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@admin.com',
            'password' => '$2y$10$fAwBzj5VeTGoqSVcgd9VAOX.Q0KZ78DCNeunZFdSIZBT8HNE45EJW',
            'created_at' => now(),
            'updated_at' => now(),
            'lastname' => 'Maffar',
            'firstname' => 'Julien',
            'accountStatus' => 1,
            'role_id' => '1',
        ]);

        User::factory()
            ->count(3)
            ->create();

    }
}
