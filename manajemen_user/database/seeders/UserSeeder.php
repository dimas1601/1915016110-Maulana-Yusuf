<?php

namespace Database\Seeders;

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
        $user=new \App\User;
        $user->username = "yusuf";
        $user->name = "Maulana Yusuf";
        $user->roles = "Administrator";
        $user->address = "Samarinda";
        $user->phone = "082251644816";
        $user->avatar = "trgsbrtj.jpg";
        $user->status = "ACTIVE";
    }
}
