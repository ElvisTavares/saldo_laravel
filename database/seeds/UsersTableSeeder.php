<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
           'name' => 'Elvis',
            'email' => 'elvis@gamil.com',
            'password'=> bcrypt('hawk'),
        ]);

        User::create([
            'name' => 'Mexicano',
            'email' => 'mexica@gamil.com',
            'password'=> bcrypt('123'),
        ]);
    }
}
