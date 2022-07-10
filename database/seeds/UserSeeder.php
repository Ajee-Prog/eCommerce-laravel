<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //
        // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        DB::table('users')->insert([
            'first_name' => 'Yusuf',
            'last_name' => 'Olatunji',
            'user_name' => 'Software Engineer',
            'email' => 'yhousouph@gmail.com',
            'password' =>  Hash::make('@73TUNMO61'),
            'address' => 'Fatai Kafo street, agungi',
            'phone' => '08141132252',
            'country' => 'Nigeria',
            'state' => 'Kwara',
            'gender' => 'Male',
            'zipcode' => '133002'

        ]);
    }
}
