<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'batman@justiceleague.com')->first();

        if(!$user){
            User::create([
                'name' => 'batman',
                'email' => 'batman@justiceleague.com',
                'role' => 'admin',
                'password' => Hash::make('ironmansucks'),
                'phone' => '+265998658213',

            ]);
            User::create([
                'name' => 'wonderwoman',
                'email' => 'wonderwoman@justiceleague.com',
                'role' => 'student',
                'password' => Hash::make('ironmansucks'),
                'phone' => '+265882920904'
            ]);
            User::create([
                'name' => 'arrow',
                'email' => 'arrow@justiceleague.com',
                'role' => 'owner',
                'password' => Hash::make('ironmansucks'),
                'phone' => '265880725775',
            ]);
        }
    }
}
