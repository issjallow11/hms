<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexualOrientationSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sexual_orientations')->insert([
        [
          'name' => 'Bisexual'
        ],
        [
          'name' => 'Heterosexual'
        ],
        [
          'name' => 'MSM'
        ]
      ]);
    }
}
