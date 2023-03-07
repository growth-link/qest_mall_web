<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemChecksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_checks')->delete();
        
        
        
    }
}