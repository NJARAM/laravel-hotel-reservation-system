<?php

use Illuminate\Database\Seeder;
Use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user=new User;
       $user->name='moses';
       $user->email='admin@gmail.com';
       $user->password='123456789';
       $user->save();
    }
}
