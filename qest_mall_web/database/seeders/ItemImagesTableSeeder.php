<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_images')->delete();
        
        
        
    }
}