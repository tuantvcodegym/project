<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin2';
        $user->email = 'admin2@gmail.com';
        $user->address = 'ha noi';
        $user->phone = '123456789';
        $user->role = '1';
        $user->password = bcrypt('123456789');
        $user->save();
    }
}
