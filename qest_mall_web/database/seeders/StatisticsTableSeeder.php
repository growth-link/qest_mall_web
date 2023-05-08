<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatisticsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statistics')->delete();
        
        
        
    }
}