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
                'id' => 1,
                'display_order' => 2,
                'top_banner_type' => 3,
                'image_id' => 55,
                'display_start_date' => '2023-01-01',
                'display_end_date' => '2023-12-31',
                'display_start_time' => '09:00:00',
                'display_end_time' => '24:00:00',
                'url' => '/sale/2',
            ),
            1 => 
            array (
                'id' => 2,
                'display_order' => 3,
                'top_banner_type' => 3,
                'image_id' => 56,
                'display_start_date' => '2023-01-01',
                'display_end_date' => '2023-12-31',
                'display_start_time' => '09:00:00',
                'display_end_time' => '24:00:00',
                'url' => '/sale/3',
            ),
            2 => 
            array (
                'id' => 3,
                'display_order' => 1,
                'top_banner_type' => 3,
                'image_id' => 54,
                'display_start_date' => '2023-01-01',
                'display_end_date' => '2023-12-31',
                'display_start_time' => '09:00:00',
                'display_end_time' => '24:00:00',
                'url' => '/sale/1',
            ),
        ));
        
        
    }
}