<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EthnicitySeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ethnicities')->insert([
        [
          'name' => 'Fula'
        ],
        [
          'name' => 'Mandinka'
        ],
        [
          'name' => 'Wolof'
        ]
        ]);
    }
}
