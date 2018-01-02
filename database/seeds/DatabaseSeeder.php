<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([

            'name' => 'Gladys Cerro',
            'email'=> 'gladys.bta@gmail.com',
            'password' => bcrypt('123123'),
            'role' => '0',

        ]);

        User::create([

            'name' => 'Educadora1',
            'email'=> 'educadora1@gmail.com',
            'password' => bcrypt('123123'),
            'role' => '1',

        ]);

        User::create([

            'name' => 'papa1',
            'email'=> 'papa1@gmail.com',
            'password' => bcrypt('123123'),
            'role' => '2',

        ]);
    }
}
