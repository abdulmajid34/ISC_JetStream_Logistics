<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserAdmin;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAdmin::create([
            'name'     => 'admin',
            'email'    => 'admin@localhost.com',
            'role'    => 'admin',
            'password' => bcrypt('qweqweqwe'),
        ]);

        UserAdmin::create([
            'name'     => 'supervisor',
            'email'    => 'supervisor@localhost.com',
            'role'    => 'supervisor',
            'password' => bcrypt('qweqweqwe'),
        ]);
    }
}
