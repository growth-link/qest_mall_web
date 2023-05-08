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
                'delivery_size_type_name' => 'コンパクト',
                'id' => 1,
            ),
            1 => 
            array (
                'delivery_size_type_name' => '60',
                'id' => 2,
            ),
            2 => 
            array (
                'delivery_size_type_name' => '80',
                'id' => 3,
            ),
            3 => 
            array (
                'delivery_size_type_name' => '100',
                'id' => 4,
            ),
            4 => 
            array (
                'delivery_size_type_name' => '120',
                'id' => 5,
            ),
            5 => 
            array (
                'delivery_size_type_name' => '140',
                'id' => 6,
            ),
        ));
        
        
    }
}