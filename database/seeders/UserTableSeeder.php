<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::factory(10)->create();
        $now = Carbon::now();

        User::insert([
            ['name' => 'merna', 'email' => 'mernaadel@gmail.com','password'=>Hash::make('mernaadel'),'user_type'=>'blogger', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'admin', 'email' => 'admin@gmail.com','password'=>Hash::make('adminadmin'),'user_type'=>'admin', 'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}
