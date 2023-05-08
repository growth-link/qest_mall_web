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
                'ad_type' => 1,
                'id' => 1,
                'image_id' => 50,
                'url' => 'https://www.aeon.jp/sc/aeonmallapp/',
            ),
            1 => 
            array (
                'ad_type' => 2,
                'id' => 2,
                'image_id' => 50,
                'url' => 'https://www.aeon.jp/sc/aeonmallapp/',
            ),
            2 => 
            array (
                'ad_type' => 3,
                'id' => 3,
                'image_id' => 51,
                'url' => 'https://www.opa-club.com/',
            ),
            3 => 
            array (
                'ad_type' => 4,
                'id' => 4,
                'image_id' => 52,
                'url' => 'https://www.waon.net/',
            ),
            4 => 
            array (
                'ad_type' => 5,
                'id' => 5,
                'image_id' => 53,
                'url' => 'https://www.aeon.jp/sc/aeonmallapp/',
            ),
        ));
        
        
    }
}