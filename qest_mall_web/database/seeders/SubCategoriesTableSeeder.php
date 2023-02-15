<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_categories')->delete();
        
        \DB::table('sub_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sub_category_name' => 'Chill Out',
                'url' => NULL,
                'image_id' => 34,
                'icon_url' => '/images/life_scene_icon/chill_out_icon.png',
            ),
            1 => 
            array (
                'id' => 2,
                'sub_category_name' => 'Health',
                'url' => NULL,
                'image_id' => 35,
                'icon_url' => '/images/life_scene_icon/health_icon.png',
            ),
            2 => 
            array (
                'id' => 3,
                'sub_category_name' => 'Minimal',
                'url' => NULL,
                'image_id' => 36,
                'icon_url' => '/images/life_scene_icon/minimal_icon.png',
            ),
            3 => 
            array (
                'id' => 4,
                'sub_category_name' => 'Fashion',
                'url' => NULL,
                'image_id' => 37,
                'icon_url' => '/images/life_scene_icon/fashion_icon.png',
            ),
            4 => 
            array (
                'id' => 5,
                'sub_category_name' => 'Hobby',
                'url' => NULL,
                'image_id' => 38,
                'icon_url' => '/images/life_scene_icon/hobby_icon.png',
            ),
            5 => 
            array (
                'id' => 6,
                'sub_category_name' => 'Art',
                'url' => NULL,
                'image_id' => 39,
                'icon_url' => '/images/life_scene_icon/art_icon.png',
            ),
            6 => 
            array (
                'id' => 7,
                'sub_category_name' => 'Gift',
                'url' => NULL,
                'image_id' => 40,
                'icon_url' => '/images/life_scene_icon/gift_icon.png',
            ),
            7 => 
            array (
                'id' => 8,
                'sub_category_name' => 'Sustainability',
                'url' => NULL,
                'image_id' => 41,
                'icon_url' => '/images/life_scene_icon/sustainability_icon.png',
            ),
            8 => 
            array (
                'id' => 9,
                'sub_category_name' => 'Gourmet',
                'url' => NULL,
                'image_id' => 42,
                'icon_url' => '/images/life_scene_icon/gourmet_icon.png',
            ),
            9 => 
            array (
                'id' => 10,
                'sub_category_name' => 'OPA',
                'url' => NULL,
                'image_id' => 43,
                'icon_url' => '/images/life_scene_icon/opa_icon.png',
            ),
        ));
        
        
    }
}