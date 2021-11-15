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
            'password' => '$2y$10$fAwBzj5VeTGoqSVcgd9VAOX.Q0KZ78DCNeunZFdSIZBT8HNE45EJW', //admin
            'created_at' => now(),
            'updated_at' => now(),
            'lastname' => 'Maffar',
            'firstname' => 'Julien',
            'accountStatus' => 1,
            'role_id' => '1',
        ]);

        User::create([
            'email' => 'user@user.com',
            'password' => '$2y$10$8IHUEF6bQt16Zs0jHqh3tu9jOglGlG2LHdf4lafdkCmxTSDKWvdiy', //user
            'created_at' => now(),
            'updated_at' => now(),
            'lastname' => 'Slimane',
            'firstname' => 'Wassim',
            'accountStatus' => 1,
            'role_id' => '2',
        ]);

        User::factory()
            ->count(3)
            ->create();

    }
}
