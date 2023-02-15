<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ads')->delete();
        
        \DB::table('ads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ad_type' => 1,
                'url' => 'https://www.aeon.jp/sc/aeonmallapp/',
                'image_id' => 50,
            ),
            1 => 
            array (
                'id' => 2,
                'ad_type' => 2,
                'url' => 'https://www.aeon.jp/sc/aeonmallapp/',
                'image_id' => 50,
            ),
            2 => 
            array (
                'id' => 3,
                'ad_type' => 3,
                'url' => 'https://www.opa-club.com/',
                'image_id' => 51,
            ),
            3 => 
            array (
                'id' => 4,
                'ad_type' => 4,
                'url' => 'https://www.waon.net/',
                'image_id' => 52,
            ),
            4 => 
            array (
                'id' => 5,
                'ad_type' => 5,
                'url' => 'https://www.aeon.jp/sc/aeonmallapp/',
                'image_id' => 53,
            ),
        ));
        
        
    }
}