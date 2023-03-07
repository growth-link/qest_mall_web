<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliveryTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('delivery_type')->delete();
        
        \DB::table('delivery_type')->insert(array (
            0 => 
            array (
                'id' => 1,
                'delivery_type_name' => 'ヤマト宅急便',
            ),
            1 => 
            array (
                'id' => 2,
                'delivery_type_name' => 'ゆうパック',
            ),
        ));
        
        
    }
}