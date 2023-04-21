<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShopDeliveryChargesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shop_delivery_charges')->delete();
        
        \DB::table('shop_delivery_charges')->insert(array (
            0 => 
            array (
                'id' => 1,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 900,
            ),
            1 => 
            array (
                'id' => 2,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 1370,
            ),
            2 => 
            array (
                'id' => 3,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            3 => 
            array (
                'id' => 4,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            4 => 
            array (
                'id' => 5,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            5 => 
            array (
                'id' => 6,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            6 => 
            array (
                'id' => 7,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 730,
            ),
            7 => 
            array (
                'id' => 8,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 1040,
            ),
            8 => 
            array (
                'id' => 9,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            9 => 
            array (
                'id' => 10,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            10 => 
            array (
                'id' => 11,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            11 => 
            array (
                'id' => 12,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            12 => 
            array (
                'id' => 13,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 680,
            ),
            13 => 
            array (
                'id' => 14,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 930,
            ),
            14 => 
            array (
                'id' => 15,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            15 => 
            array (
                'id' => 16,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            16 => 
            array (
                'id' => 17,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            17 => 
            array (
                'id' => 18,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            18 => 
            array (
                'id' => 19,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 680,
            ),
            19 => 
            array (
                'id' => 20,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 930,
            ),
            20 => 
            array (
                'id' => 21,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            21 => 
            array (
                'id' => 22,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            22 => 
            array (
                'id' => 23,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            23 => 
            array (
                'id' => 24,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            24 => 
            array (
                'id' => 25,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 680,
            ),
            25 => 
            array (
                'id' => 26,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 930,
            ),
            26 => 
            array (
                'id' => 27,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            27 => 
            array (
                'id' => 28,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            28 => 
            array (
                'id' => 29,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            29 => 
            array (
                'id' => 30,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            30 => 
            array (
                'id' => 31,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 680,
            ),
            31 => 
            array (
                'id' => 32,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 930,
            ),
            32 => 
            array (
                'id' => 33,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            33 => 
            array (
                'id' => 34,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            34 => 
            array (
                'id' => 35,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            35 => 
            array (
                'id' => 36,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            36 => 
            array (
                'id' => 37,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 680,
            ),
            37 => 
            array (
                'id' => 38,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 930,
            ),
            38 => 
            array (
                'id' => 39,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            39 => 
            array (
                'id' => 40,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            40 => 
            array (
                'id' => 41,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            41 => 
            array (
                'id' => 42,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            42 => 
            array (
                'id' => 43,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 680,
            ),
            43 => 
            array (
                'id' => 44,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 1040,
            ),
            44 => 
            array (
                'id' => 45,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            45 => 
            array (
                'id' => 46,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            46 => 
            array (
                'id' => 47,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            47 => 
            array (
                'id' => 48,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            48 => 
            array (
                'id' => 49,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 730,
            ),
            49 => 
            array (
                'id' => 50,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 1150,
            ),
            50 => 
            array (
                'id' => 51,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            51 => 
            array (
                'id' => 52,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            52 => 
            array (
                'id' => 53,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            53 => 
            array (
                'id' => 54,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            54 => 
            array (
                'id' => 55,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 790,
            ),
            55 => 
            array (
                'id' => 56,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 1150,
            ),
            56 => 
            array (
                'id' => 57,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            57 => 
            array (
                'id' => 58,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            58 => 
            array (
                'id' => 59,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            59 => 
            array (
                'id' => 60,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            60 => 
            array (
                'id' => 61,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 900,
            ),
            61 => 
            array (
                'id' => 62,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 1370,
            ),
            62 => 
            array (
                'id' => 63,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            63 => 
            array (
                'id' => 64,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            64 => 
            array (
                'id' => 65,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            65 => 
            array (
                'id' => 66,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            66 => 
            array (
                'id' => 67,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 1,
                'size_id' => 1,
                'price' => 900,
            ),
            67 => 
            array (
                'id' => 68,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 1,
                'size_id' => 2,
                'price' => 1370,
            ),
            68 => 
            array (
                'id' => 69,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 1,
                'size_id' => 3,
                'price' => 900,
            ),
            69 => 
            array (
                'id' => 70,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 1,
                'size_id' => 4,
                'price' => 900,
            ),
            70 => 
            array (
                'id' => 71,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 1,
                'size_id' => 5,
                'price' => 900,
            ),
            71 => 
            array (
                'id' => 72,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 1,
                'size_id' => 6,
                'price' => 900,
            ),
            72 => 
            array (
                'id' => 73,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 900,
            ),
            73 => 
            array (
                'id' => 74,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 1370,
            ),
            74 => 
            array (
                'id' => 75,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            75 => 
            array (
                'id' => 76,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            76 => 
            array (
                'id' => 77,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            77 => 
            array (
                'id' => 78,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 1,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            78 => 
            array (
                'id' => 79,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 730,
            ),
            79 => 
            array (
                'id' => 80,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 1040,
            ),
            80 => 
            array (
                'id' => 81,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            81 => 
            array (
                'id' => 82,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            82 => 
            array (
                'id' => 83,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            83 => 
            array (
                'id' => 84,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 2,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            84 => 
            array (
                'id' => 85,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 680,
            ),
            85 => 
            array (
                'id' => 86,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 930,
            ),
            86 => 
            array (
                'id' => 87,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            87 => 
            array (
                'id' => 88,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            88 => 
            array (
                'id' => 89,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            89 => 
            array (
                'id' => 90,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 3,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            90 => 
            array (
                'id' => 91,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 680,
            ),
            91 => 
            array (
                'id' => 92,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 930,
            ),
            92 => 
            array (
                'id' => 93,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            93 => 
            array (
                'id' => 94,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            94 => 
            array (
                'id' => 95,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            95 => 
            array (
                'id' => 96,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 4,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            96 => 
            array (
                'id' => 97,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 680,
            ),
            97 => 
            array (
                'id' => 98,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 930,
            ),
            98 => 
            array (
                'id' => 99,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            99 => 
            array (
                'id' => 100,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            100 => 
            array (
                'id' => 101,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            101 => 
            array (
                'id' => 102,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 5,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            102 => 
            array (
                'id' => 103,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 680,
            ),
            103 => 
            array (
                'id' => 104,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 930,
            ),
            104 => 
            array (
                'id' => 105,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            105 => 
            array (
                'id' => 106,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            106 => 
            array (
                'id' => 107,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            107 => 
            array (
                'id' => 108,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 6,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            108 => 
            array (
                'id' => 109,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 680,
            ),
            109 => 
            array (
                'id' => 110,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 930,
            ),
            110 => 
            array (
                'id' => 111,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            111 => 
            array (
                'id' => 112,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            112 => 
            array (
                'id' => 113,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            113 => 
            array (
                'id' => 114,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 7,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            114 => 
            array (
                'id' => 115,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 680,
            ),
            115 => 
            array (
                'id' => 116,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 1040,
            ),
            116 => 
            array (
                'id' => 117,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            117 => 
            array (
                'id' => 118,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            118 => 
            array (
                'id' => 119,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            119 => 
            array (
                'id' => 120,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 8,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            120 => 
            array (
                'id' => 121,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 730,
            ),
            121 => 
            array (
                'id' => 122,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 1150,
            ),
            122 => 
            array (
                'id' => 123,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            123 => 
            array (
                'id' => 124,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            124 => 
            array (
                'id' => 125,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            125 => 
            array (
                'id' => 126,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 9,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            126 => 
            array (
                'id' => 127,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 790,
            ),
            127 => 
            array (
                'id' => 128,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 1150,
            ),
            128 => 
            array (
                'id' => 129,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            129 => 
            array (
                'id' => 130,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            130 => 
            array (
                'id' => 131,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            131 => 
            array (
                'id' => 132,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 10,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            132 => 
            array (
                'id' => 133,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 900,
            ),
            133 => 
            array (
                'id' => 134,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 1370,
            ),
            134 => 
            array (
                'id' => 135,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            135 => 
            array (
                'id' => 136,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            136 => 
            array (
                'id' => 137,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            137 => 
            array (
                'id' => 138,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 11,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
            138 => 
            array (
                'id' => 139,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 2,
                'size_id' => 1,
                'price' => 900,
            ),
            139 => 
            array (
                'id' => 140,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 2,
                'size_id' => 2,
                'price' => 1370,
            ),
            140 => 
            array (
                'id' => 141,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 2,
                'size_id' => 3,
                'price' => 900,
            ),
            141 => 
            array (
                'id' => 142,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 2,
                'size_id' => 4,
                'price' => 900,
            ),
            142 => 
            array (
                'id' => 143,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 2,
                'size_id' => 5,
                'price' => 900,
            ),
            143 => 
            array (
                'id' => 144,
                'shop_id' => 1,
                'shop_delivery_area_set_id' => 12,
                'delivery_type_id' => 2,
                'size_id' => 6,
                'price' => 900,
            ),
        ));
        
        
    }
}