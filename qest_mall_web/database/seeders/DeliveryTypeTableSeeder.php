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
                'delivery_type_name' => 'ヤマト宅急便',
                'id' => 1,
            ),
            1 => 
            array (
                'delivery_type_name' => 'ゆうパック',
                'id' => 2,
            ),
        ));
        
        
    }
}