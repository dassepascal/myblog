<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'email'=>'admin@admin.fr',
            'name'=>'admin',
            'password'=>Hash::make('toor'),
            'role'=>User::ADMIN_ROLE,
        ]);
    }
}
