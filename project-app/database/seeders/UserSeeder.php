<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name'     => 'admin',
            'email'    => 'admin@localhost.com',
            'role'    => 'admin',
            'password' => bcrypt('qweqweqwe'),
        ]);

        User::create([
            'name'     => 'supervisor',
            'email'    => 'supervisor@localhost.com',
            'role'    => 'supervisor',
            'password' => bcrypt('qweqweqwe'),
        ]);
    }
}
