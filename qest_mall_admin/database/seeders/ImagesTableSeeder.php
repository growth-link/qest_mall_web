<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'url' => '/images/category_icon/men\'s_icon.png',
            ),
            1 => 
            array (
                'id' => 2,
                'url' => '/images/category_icon/ladies_icon.png',
            ),
            2 => 
            array (
                'id' => 3,
                'url' => '/images/category_icon/kids_icon.png',
            ),
            3 => 
            array (
                'id' => 4,
                'url' => '/images/category_icon/tableware_icon.png',
            ),
            4 => 
            array (
                'id' => 5,
                'url' => '/images/category_icon/kitchen_icon.png',
            ),
            5 => 
            array (
                'id' => 6,
                'url' => '/images/category_icon/interior_icon.png',
            ),
            6 => 
            array (
                'id' => 7,
                'url' => '/images/category_icon/housekeeping_icon.png',
            ),
            7 => 
            array (
                'id' => 8,
                'url' => '/images/category_icon/smartphone_icon.png',
            ),
            8 => 
            array (
                'id' => 9,
                'url' => '/images/category_icon/stationary_icon.png',
            ),
            9 => 
            array (
                'id' => 10,
                'url' => '/images/category_icon/pet_icon.png',
            ),
            10 => 
            array (
                'id' => 11,
                'url' => '/images/category_icon/toy_icon.png',
            ),
            11 => 
            array (
                'id' => 12,
                'url' => '/images/category_icon/hobby_icon.png',
            ),
            12 => 
            array (
                'id' => 13,
                'url' => '/images/category_icon/illumination_icon.png',
            ),
            13 => 
            array (
                'id' => 14,
                'url' => '/images/category_icon/furniture_icon.png',
            ),
            14 => 
            array (
                'id' => 15,
                'url' => '/images/category_icon/fabric_icon.png',
            ),
            15 => 
            array (
                'id' => 16,
                'url' => '/images/category_icon/garden_icon.png',
            ),
            16 => 
            array (
                'id' => 17,
                'url' => '/images/category_icon/drink_icon.png',
            ),
            17 => 
            array (
                'id' => 18,
                'url' => '/images/category_icon/sweets_icon.png',
            ),
            18 => 
            array (
                'id' => 19,
                'url' => '/images/category_icon/noodles_icon.png',
            ),
            19 => 
            array (
                'id' => 20,
                'url' => '/images/category_icon/rice_icon.png',
            ),
            20 => 
            array (
                'id' => 21,
                'url' => '/images/category_icon/bread_icon.png',
            ),
            21 => 
            array (
                'id' => 22,
                'url' => '/images/category_icon/jam_icon.png',
            ),
            22 => 
            array (
                'id' => 23,
                'url' => '/images/category_icon/supplement_icon.png',
            ),
            23 => 
            array (
                'id' => 24,
                'url' => '/images/category_icon/seasoning_icon.png',
            ),
            24 => 
            array (
                'id' => 25,
                'url' => '/images/category_icon/body_soap_icon.png',
            ),
            25 => 
            array (
                'id' => 26,
                'url' => '/images/category_icon/skin_care_icon.png',
            ),
            26 => 
            array (
                'id' => 27,
                'url' => '/images/category_icon/makeup_nail_icon.png',
            ),
            27 => 
            array (
                'id' => 28,
                'url' => '/images/category_icon/body_care_icon.png',
            ),
            28 => 
            array (
                'id' => 29,
                'url' => '/images/category_icon/hair_care_icon.png',
            ),
            29 => 
            array (
                'id' => 30,
                'url' => '/images/category_icon/bath_care_icon.png',
            ),
            30 => 
            array (
                'id' => 31,
                'url' => '/images/category_icon/perfume_icon.png',
            ),
            31 => 
            array (
                'id' => 32,
                'url' => '/images/category_icon/oral_care_icon.png',
            ),
            32 => 
            array (
                'id' => 33,
                'url' => '/images/category_icon/no_image_icon.png',
            ),
            33 => 
            array (
                'id' => 34,
                'url' => '/images/life_scene_banner/chill_out_banner.png',
            ),
            34 => 
            array (
                'id' => 35,
                'url' => '/images/life_scene_banner/health_banner.png',
            ),
            35 => 
            array (
                'id' => 36,
                'url' => '/images/life_scene_banner/minimal_banner.png',
            ),
            36 => 
            array (
                'id' => 37,
                'url' => '/images/life_scene_banner/fashion_banner.png',
            ),
            37 => 
            array (
                'id' => 38,
                'url' => '/images/life_scene_banner/hobby_banner.png',
            ),
            38 => 
            array (
                'id' => 39,
                'url' => '/images/life_scene_banner/art_banner.png',
            ),
            39 => 
            array (
                'id' => 40,
                'url' => '/images/life_scene_banner/gift_banner.png',
            ),
            40 => 
            array (
                'id' => 41,
                'url' => '/images/life_scene_banner/sustainability_banner.png',
            ),
            41 => 
            array (
                'id' => 42,
                'url' => '/images/life_scene_banner/gourmet_banner.png',
            ),
            42 => 
            array (
                'id' => 43,
                'url' => '/images/life_scene_banner/opa_banner.png',
            ),
            43 => 
            array (
                'id' => 44,
                'url' => '/images/shop/shop_libre.png',
            ),
            44 => 
            array (
                'id' => 45,
                'url' => '/images/shop/shop_mill_mill.png',
            ),
            45 => 
            array (
                'id' => 46,
                'url' => '/images/shop/shop_baby_baby.png',
            ),
            46 => 
            array (
                'id' => 47,
                'url' => '/images/shop/shop_&life.png',
            ),
            47 => 
            array (
                'id' => 48,
                'url' => '/images/shop/shop_tennomegumi.png',
            ),
            48 => 
            array (
                'id' => 49,
                'url' => '/images/coupon/SPECIAL-COUPON-2021-1-1024x512.png',
            ),
            49 => 
            array (
                'id' => 50,
                'url' => '/images/advertisement/ad_iAEON.png',
            ),
            50 => 
            array (
                'id' => 51,
                'url' => '/images/advertisement/ad_wow_kyoto.png',
            ),
            51 => 
            array (
                'id' => 52,
                'url' => '/images/advertisement/ad_waon.png',
            ),
            52 => 
            array (
                'id' => 53,
                'url' => '/images/advertisement/amappiaeon_l.png',
            ),
            53 => 
            array (
                'id' => 54,
                'url' => '/images/mall_top/main_carousel.png',
            ),
            54 => 
            array (
                'id' => 55,
                'url' => '/images/mall_top/main_carousel2.png',
            ),
            55 => 
            array (
                'id' => 56,
                'url' => '/images/mall_top/main_carousel3.png',
            ),
            56 => 
            array (
                'id' => 57,
                'url' => NULL,
            ),
        ));
        
        
    }
}