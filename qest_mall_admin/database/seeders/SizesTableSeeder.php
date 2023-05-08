<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sizes')->delete();
        
        \DB::table('sizes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'size_name' => 'コンパクト',
            ),
            1 => 
            array (
                'id' => 2,
                'size_name' => '60',
            ),
            2 => 
            array (
                'id' => 3,
                'size_name' => '80',
            ),
            3 => 
            array (
                'id' => 4,
                'size_name' => '100',
            ),
            4 => 
            array (
                'id' => 5,
                'size_name' => '120',
            ),
            5 => 
            array (
                'id' => 6,
                'size_name' => '140',
            ),
        ));
        
        
    }
}