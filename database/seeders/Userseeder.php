<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'jimy ronal soriano garcia',
            'email' => 'pruebacodersfree.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
