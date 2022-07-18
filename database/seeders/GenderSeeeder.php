<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('genders')->insert([
        [
        'name' => 'male'
        ],
        [
          'name' => 'female'
        ],
        [
          'name' => 'other'
        ]
      ]);
    }
}
