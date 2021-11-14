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
            'email' => 'julien.maffar@hotmail.com',
            'password' => '$2y$10$qgmGWlW0gShkdF9e7FnQr.xBIGASFerRqYEEvoWbspMufoRnuAkYm',
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
