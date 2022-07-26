<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationLevelSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('education_levels')->insert([
        [
          'name' => 'Bachelors Degree'
        ],
        [
          'name' => 'Masters Degree'
        ],
        [
          'name' => 'High School Diplomat'
        ]
        ]);
    }
}
