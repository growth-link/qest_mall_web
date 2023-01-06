<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prefectures')->delete();
        
        \DB::table('prefectures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'prefecture_name' => '北海道',
            ),
            1 => 
            array (
                'id' => 2,
                'prefecture_name' => '東京',
            ),
        ));
        
        
    }
}