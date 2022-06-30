<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'lname' => 'Genita',
                'fname' => 'Louei',
                'username' => 'djlouei',
                'password' => bcrypt('123'),
                'email' => 'louei@gmail.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Abarquez',
                'fname' => 'Khent',
                'username' => 'khent',
                'password' => bcrypt('123'),
                'email' => 'khent@gmail.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Benablo',
                'fname' => 'MarkDwin',
                'username' => 'Maki',
                'password' => bcrypt('123'),
                'email' => 'maki@gmail.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Coscos',
                'fname' => 'John Ritchie',
                'username' => 'Tsing',
                'password' => bcrypt('123'),
                'email' => 'itsing@gmail.com',
                'email_verified_at' => Carbon::now()
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
