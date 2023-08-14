<?php

namespace Database\Seeders;

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
        // // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'munazzil',
            'email' => 'munazzil@gmail.com',
        ]);
        $user->assignRole('customer');

        $user = \App\Models\User::factory()->create([
            'name' => 'Ahmed',
            'email' => 'ahmed@gmail.com',
        ]);
        $user->assignRole('vendor');

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example Super-Admin User',
        //     'email' => 'superadmin@example.com',
        // ]);
        // $user->assignRole($role3);
    }
}
