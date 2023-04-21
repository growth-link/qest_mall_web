<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliverySizeTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('delivery_size_types')->delete();
        
        \DB::table('delivery_size_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'delivery_size_type_name' => 'コンパクト',
            ),
            1 => 
            array (
                'id' => 2,
                'delivery_size_type_name' => '60',
            ),
            2 => 
            array (
                'id' => 3,
                'delivery_size_type_name' => '80',
            ),
            3 => 
            array (
                'id' => 4,
                'delivery_size_type_name' => '100',
            ),
            4 => 
            array (
                'id' => 5,
                'delivery_size_type_name' => '120',
            ),
            5 => 
            array (
                'id' => 6,
                'delivery_size_type_name' => '140',
            ),
        ));
        
        
    }
}