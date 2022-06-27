<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $shops=User::factory(10)->create();
        foreach ($shops as $shop) {
            $shop->assignRole('Shop');
        }


        // $user = User::factory(10)->create([
        //     'firstname' => 'ZaheerShop',
        //     'email' => 'shop@asadsohail.com',
        //     'password' => Hash::make('aaaaaaaa'),
        // ]);
        // $user->assignRole('Shop');
    }
}
