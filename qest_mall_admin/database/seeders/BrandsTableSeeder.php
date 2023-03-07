<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'brand_name' => '天のめぐみブランド1',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'brand_name' => 'ブランド2',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'brand_name' => 'ブランド3',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'brand_name' => 'ブランド4',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'brand_name' => 'ブランド5',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}