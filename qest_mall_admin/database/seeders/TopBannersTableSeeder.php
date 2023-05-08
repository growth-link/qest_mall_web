<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopBannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('top_banners')->delete();
        
        \DB::table('top_banners')->insert(array (
            0 => 
            array (
                'display_end_date' => '2023-12-31',
                'display_end_time' => '24:00:00',
                'display_order' => 2,
                'display_start_date' => '2023-01-01',
                'display_start_time' => '09:00:00',
                'id' => 1,
                'image_id' => 55,
                'top_banner_type' => 3,
                'url' => '/sale/2',
            ),
            1 => 
            array (
                'display_end_date' => '2023-12-31',
                'display_end_time' => '24:00:00',
                'display_order' => 3,
                'display_start_date' => '2023-01-01',
                'display_start_time' => '09:00:00',
                'id' => 2,
                'image_id' => 56,
                'top_banner_type' => 3,
                'url' => '/sale/3',
            ),
            2 => 
            array (
                'display_end_date' => '2023-12-31',
                'display_end_time' => '24:00:00',
                'display_order' => 1,
                'display_start_date' => '2023-01-01',
                'display_start_time' => '09:00:00',
                'id' => 3,
                'image_id' => 54,
                'top_banner_type' => 3,
                'url' => '/sale/1',
            ),
        ));
        
        
    }
}