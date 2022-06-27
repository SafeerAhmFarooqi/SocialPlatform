<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $users=User::factory(10)->create();
        foreach ($users as $user) {
            $user->assignRole('User');
        }

        // $user = User::factory()->create([
        //     'firstname' => 'Safeer',
        //     'email' => 'safeer@asadsohail.com',
        //     'password' => Hash::make('aaaaaaaa'),
        // ]);
        // $user->assignRole('User');
    }
}
