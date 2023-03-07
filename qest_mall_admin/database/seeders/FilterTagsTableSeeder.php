<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilterTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('filter_tags')->delete();
        
        
        
    }
}