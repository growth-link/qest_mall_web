<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponTargetItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupon_target_items')->delete();
        
        \DB::table('coupon_target_items')->insert(array (
            0 => 
            array (
                'coupon_id' => 1,
                'item_id' => 1,
                'created_at' => '2023-03-15 16:53:15',
                'updaated_at' => '2023-03-15 16:53:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}