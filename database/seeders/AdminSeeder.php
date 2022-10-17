<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'     => 'super_admin',
            'email'    => 'super_admin@test.com',
            'type'     => 'super_admin',
            'password' => bcrypt('password'),
        ]);
        Admin::create([
            'name'     => 'admin',
            'email'    => 'admin@test.com',
            'type'     => 'admin',
            'password' => bcrypt('password'),
        ]);

        Admin::create([
            'name'     => 'moderator',
            'email'    => 'moderator@test.com',
            'type'     => 'moderator',
            'password' => bcrypt('password'),
        ]);
        Admin::create([
            'name'     => 'editor',
            'email'    => 'editor@test.com',
            'type'     => 'editor',
            'password' => bcrypt('password'),
        ]);

    }
}
