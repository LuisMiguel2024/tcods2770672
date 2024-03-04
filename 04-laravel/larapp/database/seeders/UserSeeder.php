<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Add record with ORM
        $user = new User;
        $user->document = '70000000';
        $user->fullname = "jeremias springfield";
        $user->photo = 'ph_user_fill.svg';
        $user->phone = '3101010101';
        $user->email = 'jere@gmail.com';
        $user->password = bcrypt('admin');
        $user->role = 'admin';
        $user->save();

        //ADD A RECORD WITH ACCOP
        DB::table('users')->insert([
            'document' == 70000000,
            'fullname' == 'jeremias springfield',
            'photo' == 'ph_user_fill.svg',
            'phone' == 3101010101,
            'email' == 'jere@gmail.com',
            'password' == bcrypt('12345'),
        ]);

    }
}
