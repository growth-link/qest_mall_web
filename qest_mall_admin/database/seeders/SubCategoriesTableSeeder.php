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
                'icon_url' => '/images/life_scene_icon/chill_out_icon.png',
                'id' => 1,
                'image_id' => 34,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_chill_out_top_banner.png',
                'sub_category_name' => 'Chill Out',
                'top_banner_url' => '/images/life_scene_top_banner/chill_out_top_banner.png',
                'url' => NULL,
            ),
            1 => 
            array (
                'icon_url' => '/images/life_scene_icon/health_icon.png',
                'id' => 2,
                'image_id' => 35,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_health_top_banner.png',
                'sub_category_name' => 'Health',
                'top_banner_url' => '/images/life_scene_top_banner/health_top_banner.png',
                'url' => NULL,
            ),
            2 => 
            array (
                'icon_url' => '/images/life_scene_icon/minimal_icon.png',
                'id' => 3,
                'image_id' => 36,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_minimal_top_banner.png',
                'sub_category_name' => 'Minimal',
                'top_banner_url' => '/images/life_scene_top_banner/minimal_top_banner.png',
                'url' => NULL,
            ),
            3 => 
            array (
                'icon_url' => '/images/life_scene_icon/fashion_icon.png',
                'id' => 4,
                'image_id' => 37,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_fashion_top_banner.png',
                'sub_category_name' => 'Fashion',
                'top_banner_url' => '/images/life_scene_top_banner/fashion_top_banner.png',
                'url' => NULL,
            ),
            4 => 
            array (
                'icon_url' => '/images/life_scene_icon/hobby_icon.png',
                'id' => 5,
                'image_id' => 38,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_hobby_top_banner.png',
                'sub_category_name' => 'Hobby',
                'top_banner_url' => '/images/life_scene_top_banner/hobby_top_banner.png',
                'url' => NULL,
            ),
            5 => 
            array (
                'icon_url' => '/images/life_scene_icon/art_icon.png',
                'id' => 6,
                'image_id' => 39,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_art_top_banner.png',
                'sub_category_name' => 'Art',
                'top_banner_url' => '/images/life_scene_top_banner/art_top_banner.png',
                'url' => NULL,
            ),
            6 => 
            array (
                'icon_url' => '/images/life_scene_icon/gift_icon.png',
                'id' => 7,
                'image_id' => 40,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_gift_top_banner.png',
                'sub_category_name' => 'Gift',
                'top_banner_url' => '/images/life_scene_top_banner/gift_top_banner.png',
                'url' => NULL,
            ),
            7 => 
            array (
                'icon_url' => '/images/life_scene_icon/sustainability_icon.png',
                'id' => 8,
                'image_id' => 41,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_sustainability_top_banner.png',
                'sub_category_name' => 'Sustainability',
                'top_banner_url' => '/images/life_scene_top_banner/sustainability_top_banner.png',
                'url' => NULL,
            ),
            8 => 
            array (
                'icon_url' => '/images/life_scene_icon/gourmet_icon.png',
                'id' => 9,
                'image_id' => 42,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_gourmet_top_banner.png',
                'sub_category_name' => 'Gourmet',
                'top_banner_url' => '/images/life_scene_top_banner/gourmet_top_banner.png',
                'url' => NULL,
            ),
            9 => 
            array (
                'icon_url' => '/images/life_scene_icon/opa_icon.png',
                'id' => 10,
                'image_id' => 43,
                'sp_top_banner_url' => '/images/life_scene_top_banner/sp_opa_top_banner.png',
                'sub_category_name' => 'OPA',
                'top_banner_url' => '/images/life_scene_top_banner/opa_top_banner.png',
                'url' => NULL,
            ),
        ));
        
        
    }
}