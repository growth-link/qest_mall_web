<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'coupon_id' => 1,
                'url' => NULL,
                'image_id' => 49,
            ),
        ));
        
        
    }
}