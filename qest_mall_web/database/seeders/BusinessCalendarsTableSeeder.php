<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessCalendarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('business_calendars')->delete();
        
        \DB::table('business_calendars')->insert(array (
            0 => 
            array (
                'basic_holiday' => '土日祝',
                'business_hours' => '月〜木：9:00 〜 20:00
金：9:00 〜 21:00',
                'shop_id' => 1,
            ),
        ));
        
        
    }
}