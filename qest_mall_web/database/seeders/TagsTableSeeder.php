<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag_name' => 'NEW',
            ),
            1 => 
            array (
                'id' => 2,
                'tag_name' => '再入荷',
            ),
            2 => 
            array (
                'id' => 3,
                'tag_name' => '人気商品',
            ),
            3 => 
            array (
                'id' => 4,
                'tag_name' => '残りわずか',
            ),
            4 => 
            array (
                'id' => 5,
                'tag_name' => '注目商品',
            ),
            5 => 
            array (
                'id' => 6,
                'tag_name' => 'ベストセラー',
            ),
            6 => 
            array (
                'id' => 7,
                'tag_name' => 'メディア掲載',
            ),
            7 => 
            array (
                'id' => 8,
                'tag_name' => '数量限定',
            ),
            8 => 
            array (
                'id' => 9,
                'tag_name' => 'WEB限定',
            ),
            9 => 
            array (
                'id' => 10,
                'tag_name' => '会員限定',
            ),
            10 => 
            array (
                'id' => 11,
                'tag_name' => '先行予約',
            ),
        ));
        
        
    }
}