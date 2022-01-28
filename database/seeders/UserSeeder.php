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
            'name' => 'Admin Sastra Inggris',
            'email' => 'adminbi@binadarma.ac.id',
            'password' => bcrypt('adminbiubd')
        ]);
    }
}
