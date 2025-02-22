<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WbUser;
use Illuminate\Support\Facades\Hash;

class WbUserSeeder extends Seeder
{
    public function run()
    {
        WbUser::create([
            'name' => 'Chirag Kumar',
            'email' => 'chirag@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
