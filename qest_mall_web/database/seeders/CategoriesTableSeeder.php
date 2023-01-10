<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'category_name' => 'テストカテゴリー',
            ),
            1 => 
            array (
                'category_id' => 2,
                'category_name' => 'テストカテゴリー2',
            ),
        ));
        
        
    }
}