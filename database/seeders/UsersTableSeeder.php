<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('email', 'admin@gmail.com')->delete();

        DB::table('users')->insert([
          [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'telephone_1' => 3322182,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'type' => 'admin',
          ],
          [
            'first_name' => 'Malick',
            'last_name' => 'Njie',
            'telephone_1' => 3322182,
            'email' => 'malick@gmail.com',
            'password' => bcrypt('password'),
            'type' => 'doctor',
          ]
      ]);
    }
}
