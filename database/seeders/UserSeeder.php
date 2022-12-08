<?php

namespace Database\Seeders;

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
        User::where('id', 1)->update(array_merge([
            'name'  => 'Testing Hadi',
            'email' => 'testing@hadi.com',
            'password' => bcrypt('password'),
        ]));
    }
}
