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
                'delivery_type_id' => 1,
                'id' => 1,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            1 => 
            array (
                'delivery_type_id' => 1,
                'id' => 2,
                'price' => 1370,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            2 => 
            array (
                'delivery_type_id' => 1,
                'id' => 3,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            3 => 
            array (
                'delivery_type_id' => 1,
                'id' => 4,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            4 => 
            array (
                'delivery_type_id' => 1,
                'id' => 5,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            5 => 
            array (
                'delivery_type_id' => 1,
                'id' => 6,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            6 => 
            array (
                'delivery_type_id' => 1,
                'id' => 7,
                'price' => 730,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            7 => 
            array (
                'delivery_type_id' => 1,
                'id' => 8,
                'price' => 1040,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            8 => 
            array (
                'delivery_type_id' => 1,
                'id' => 9,
                'price' => 900,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            9 => 
            array (
                'delivery_type_id' => 1,
                'id' => 10,
                'price' => 900,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            10 => 
            array (
                'delivery_type_id' => 1,
                'id' => 11,
                'price' => 900,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            11 => 
            array (
                'delivery_type_id' => 1,
                'id' => 12,
                'price' => 900,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            12 => 
            array (
                'delivery_type_id' => 1,
                'id' => 13,
                'price' => 680,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            13 => 
            array (
                'delivery_type_id' => 1,
                'id' => 14,
                'price' => 930,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            14 => 
            array (
                'delivery_type_id' => 1,
                'id' => 15,
                'price' => 900,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            15 => 
            array (
                'delivery_type_id' => 1,
                'id' => 16,
                'price' => 900,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            16 => 
            array (
                'delivery_type_id' => 1,
                'id' => 17,
                'price' => 900,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            17 => 
            array (
                'delivery_type_id' => 1,
                'id' => 18,
                'price' => 900,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            18 => 
            array (
                'delivery_type_id' => 1,
                'id' => 19,
                'price' => 680,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            19 => 
            array (
                'delivery_type_id' => 1,
                'id' => 20,
                'price' => 930,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            20 => 
            array (
                'delivery_type_id' => 1,
                'id' => 21,
                'price' => 900,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            21 => 
            array (
                'delivery_type_id' => 1,
                'id' => 22,
                'price' => 900,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            22 => 
            array (
                'delivery_type_id' => 1,
                'id' => 23,
                'price' => 900,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            23 => 
            array (
                'delivery_type_id' => 1,
                'id' => 24,
                'price' => 900,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            24 => 
            array (
                'delivery_type_id' => 1,
                'id' => 25,
                'price' => 680,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            25 => 
            array (
                'delivery_type_id' => 1,
                'id' => 26,
                'price' => 930,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            26 => 
            array (
                'delivery_type_id' => 1,
                'id' => 27,
                'price' => 900,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            27 => 
            array (
                'delivery_type_id' => 1,
                'id' => 28,
                'price' => 900,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            28 => 
            array (
                'delivery_type_id' => 1,
                'id' => 29,
                'price' => 900,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            29 => 
            array (
                'delivery_type_id' => 1,
                'id' => 30,
                'price' => 900,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            30 => 
            array (
                'delivery_type_id' => 1,
                'id' => 31,
                'price' => 680,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            31 => 
            array (
                'delivery_type_id' => 1,
                'id' => 32,
                'price' => 930,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            32 => 
            array (
                'delivery_type_id' => 1,
                'id' => 33,
                'price' => 900,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            33 => 
            array (
                'delivery_type_id' => 1,
                'id' => 34,
                'price' => 900,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            34 => 
            array (
                'delivery_type_id' => 1,
                'id' => 35,
                'price' => 900,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            35 => 
            array (
                'delivery_type_id' => 1,
                'id' => 36,
                'price' => 900,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            36 => 
            array (
                'delivery_type_id' => 1,
                'id' => 37,
                'price' => 680,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            37 => 
            array (
                'delivery_type_id' => 1,
                'id' => 38,
                'price' => 930,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            38 => 
            array (
                'delivery_type_id' => 1,
                'id' => 39,
                'price' => 900,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            39 => 
            array (
                'delivery_type_id' => 1,
                'id' => 40,
                'price' => 900,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            40 => 
            array (
                'delivery_type_id' => 1,
                'id' => 41,
                'price' => 900,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            41 => 
            array (
                'delivery_type_id' => 1,
                'id' => 42,
                'price' => 900,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            42 => 
            array (
                'delivery_type_id' => 1,
                'id' => 43,
                'price' => 680,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            43 => 
            array (
                'delivery_type_id' => 1,
                'id' => 44,
                'price' => 1040,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            44 => 
            array (
                'delivery_type_id' => 1,
                'id' => 45,
                'price' => 900,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            45 => 
            array (
                'delivery_type_id' => 1,
                'id' => 46,
                'price' => 900,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            46 => 
            array (
                'delivery_type_id' => 1,
                'id' => 47,
                'price' => 900,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            47 => 
            array (
                'delivery_type_id' => 1,
                'id' => 48,
                'price' => 900,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            48 => 
            array (
                'delivery_type_id' => 1,
                'id' => 49,
                'price' => 730,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            49 => 
            array (
                'delivery_type_id' => 1,
                'id' => 50,
                'price' => 1150,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            50 => 
            array (
                'delivery_type_id' => 1,
                'id' => 51,
                'price' => 900,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            51 => 
            array (
                'delivery_type_id' => 1,
                'id' => 52,
                'price' => 900,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            52 => 
            array (
                'delivery_type_id' => 1,
                'id' => 53,
                'price' => 900,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            53 => 
            array (
                'delivery_type_id' => 1,
                'id' => 54,
                'price' => 900,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            54 => 
            array (
                'delivery_type_id' => 1,
                'id' => 55,
                'price' => 790,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            55 => 
            array (
                'delivery_type_id' => 1,
                'id' => 56,
                'price' => 1150,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            56 => 
            array (
                'delivery_type_id' => 1,
                'id' => 57,
                'price' => 900,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            57 => 
            array (
                'delivery_type_id' => 1,
                'id' => 58,
                'price' => 900,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            58 => 
            array (
                'delivery_type_id' => 1,
                'id' => 59,
                'price' => 900,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            59 => 
            array (
                'delivery_type_id' => 1,
                'id' => 60,
                'price' => 900,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            60 => 
            array (
                'delivery_type_id' => 1,
                'id' => 61,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            61 => 
            array (
                'delivery_type_id' => 1,
                'id' => 62,
                'price' => 1370,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            62 => 
            array (
                'delivery_type_id' => 1,
                'id' => 63,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            63 => 
            array (
                'delivery_type_id' => 1,
                'id' => 64,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            64 => 
            array (
                'delivery_type_id' => 1,
                'id' => 65,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            65 => 
            array (
                'delivery_type_id' => 1,
                'id' => 66,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            66 => 
            array (
                'delivery_type_id' => 1,
                'id' => 67,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            67 => 
            array (
                'delivery_type_id' => 1,
                'id' => 68,
                'price' => 1370,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            68 => 
            array (
                'delivery_type_id' => 1,
                'id' => 69,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            69 => 
            array (
                'delivery_type_id' => 1,
                'id' => 70,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            70 => 
            array (
                'delivery_type_id' => 1,
                'id' => 71,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            71 => 
            array (
                'delivery_type_id' => 1,
                'id' => 72,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            72 => 
            array (
                'delivery_type_id' => 2,
                'id' => 73,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            73 => 
            array (
                'delivery_type_id' => 2,
                'id' => 74,
                'price' => 1370,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            74 => 
            array (
                'delivery_type_id' => 2,
                'id' => 75,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            75 => 
            array (
                'delivery_type_id' => 2,
                'id' => 76,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            76 => 
            array (
                'delivery_type_id' => 2,
                'id' => 77,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            77 => 
            array (
                'delivery_type_id' => 2,
                'id' => 78,
                'price' => 900,
                'shop_delivery_area_set_id' => 1,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            78 => 
            array (
                'delivery_type_id' => 2,
                'id' => 79,
                'price' => 730,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            79 => 
            array (
                'delivery_type_id' => 2,
                'id' => 80,
                'price' => 1040,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            80 => 
            array (
                'delivery_type_id' => 2,
                'id' => 81,
                'price' => 900,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            81 => 
            array (
                'delivery_type_id' => 2,
                'id' => 82,
                'price' => 900,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            82 => 
            array (
                'delivery_type_id' => 2,
                'id' => 83,
                'price' => 900,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            83 => 
            array (
                'delivery_type_id' => 2,
                'id' => 84,
                'price' => 900,
                'shop_delivery_area_set_id' => 2,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            84 => 
            array (
                'delivery_type_id' => 2,
                'id' => 85,
                'price' => 680,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            85 => 
            array (
                'delivery_type_id' => 2,
                'id' => 86,
                'price' => 930,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            86 => 
            array (
                'delivery_type_id' => 2,
                'id' => 87,
                'price' => 900,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            87 => 
            array (
                'delivery_type_id' => 2,
                'id' => 88,
                'price' => 900,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            88 => 
            array (
                'delivery_type_id' => 2,
                'id' => 89,
                'price' => 900,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            89 => 
            array (
                'delivery_type_id' => 2,
                'id' => 90,
                'price' => 900,
                'shop_delivery_area_set_id' => 3,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            90 => 
            array (
                'delivery_type_id' => 2,
                'id' => 91,
                'price' => 680,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            91 => 
            array (
                'delivery_type_id' => 2,
                'id' => 92,
                'price' => 930,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            92 => 
            array (
                'delivery_type_id' => 2,
                'id' => 93,
                'price' => 900,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            93 => 
            array (
                'delivery_type_id' => 2,
                'id' => 94,
                'price' => 900,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            94 => 
            array (
                'delivery_type_id' => 2,
                'id' => 95,
                'price' => 900,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            95 => 
            array (
                'delivery_type_id' => 2,
                'id' => 96,
                'price' => 900,
                'shop_delivery_area_set_id' => 4,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            96 => 
            array (
                'delivery_type_id' => 2,
                'id' => 97,
                'price' => 680,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            97 => 
            array (
                'delivery_type_id' => 2,
                'id' => 98,
                'price' => 930,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            98 => 
            array (
                'delivery_type_id' => 2,
                'id' => 99,
                'price' => 900,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            99 => 
            array (
                'delivery_type_id' => 2,
                'id' => 100,
                'price' => 900,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            100 => 
            array (
                'delivery_type_id' => 2,
                'id' => 101,
                'price' => 900,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            101 => 
            array (
                'delivery_type_id' => 2,
                'id' => 102,
                'price' => 900,
                'shop_delivery_area_set_id' => 5,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            102 => 
            array (
                'delivery_type_id' => 2,
                'id' => 103,
                'price' => 680,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            103 => 
            array (
                'delivery_type_id' => 2,
                'id' => 104,
                'price' => 930,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            104 => 
            array (
                'delivery_type_id' => 2,
                'id' => 105,
                'price' => 900,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            105 => 
            array (
                'delivery_type_id' => 2,
                'id' => 106,
                'price' => 900,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            106 => 
            array (
                'delivery_type_id' => 2,
                'id' => 107,
                'price' => 900,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            107 => 
            array (
                'delivery_type_id' => 2,
                'id' => 108,
                'price' => 900,
                'shop_delivery_area_set_id' => 6,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            108 => 
            array (
                'delivery_type_id' => 2,
                'id' => 109,
                'price' => 680,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            109 => 
            array (
                'delivery_type_id' => 2,
                'id' => 110,
                'price' => 930,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            110 => 
            array (
                'delivery_type_id' => 2,
                'id' => 111,
                'price' => 900,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            111 => 
            array (
                'delivery_type_id' => 2,
                'id' => 112,
                'price' => 900,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            112 => 
            array (
                'delivery_type_id' => 2,
                'id' => 113,
                'price' => 900,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            113 => 
            array (
                'delivery_type_id' => 2,
                'id' => 114,
                'price' => 900,
                'shop_delivery_area_set_id' => 7,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            114 => 
            array (
                'delivery_type_id' => 2,
                'id' => 115,
                'price' => 680,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            115 => 
            array (
                'delivery_type_id' => 2,
                'id' => 116,
                'price' => 1040,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            116 => 
            array (
                'delivery_type_id' => 2,
                'id' => 117,
                'price' => 900,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            117 => 
            array (
                'delivery_type_id' => 2,
                'id' => 118,
                'price' => 900,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            118 => 
            array (
                'delivery_type_id' => 2,
                'id' => 119,
                'price' => 900,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            119 => 
            array (
                'delivery_type_id' => 2,
                'id' => 120,
                'price' => 900,
                'shop_delivery_area_set_id' => 8,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            120 => 
            array (
                'delivery_type_id' => 2,
                'id' => 121,
                'price' => 730,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            121 => 
            array (
                'delivery_type_id' => 2,
                'id' => 122,
                'price' => 1150,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            122 => 
            array (
                'delivery_type_id' => 2,
                'id' => 123,
                'price' => 900,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            123 => 
            array (
                'delivery_type_id' => 2,
                'id' => 124,
                'price' => 900,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            124 => 
            array (
                'delivery_type_id' => 2,
                'id' => 125,
                'price' => 900,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            125 => 
            array (
                'delivery_type_id' => 2,
                'id' => 126,
                'price' => 900,
                'shop_delivery_area_set_id' => 9,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            126 => 
            array (
                'delivery_type_id' => 2,
                'id' => 127,
                'price' => 790,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            127 => 
            array (
                'delivery_type_id' => 2,
                'id' => 128,
                'price' => 1150,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            128 => 
            array (
                'delivery_type_id' => 2,
                'id' => 129,
                'price' => 900,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            129 => 
            array (
                'delivery_type_id' => 2,
                'id' => 130,
                'price' => 900,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            130 => 
            array (
                'delivery_type_id' => 2,
                'id' => 131,
                'price' => 900,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            131 => 
            array (
                'delivery_type_id' => 2,
                'id' => 132,
                'price' => 900,
                'shop_delivery_area_set_id' => 10,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            132 => 
            array (
                'delivery_type_id' => 2,
                'id' => 133,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            133 => 
            array (
                'delivery_type_id' => 2,
                'id' => 134,
                'price' => 1370,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            134 => 
            array (
                'delivery_type_id' => 2,
                'id' => 135,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            135 => 
            array (
                'delivery_type_id' => 2,
                'id' => 136,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            136 => 
            array (
                'delivery_type_id' => 2,
                'id' => 137,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            137 => 
            array (
                'delivery_type_id' => 2,
                'id' => 138,
                'price' => 900,
                'shop_delivery_area_set_id' => 11,
                'shop_id' => 1,
                'size_id' => 6,
            ),
            138 => 
            array (
                'delivery_type_id' => 2,
                'id' => 139,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 1,
            ),
            139 => 
            array (
                'delivery_type_id' => 2,
                'id' => 140,
                'price' => 1370,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 2,
            ),
            140 => 
            array (
                'delivery_type_id' => 2,
                'id' => 141,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 3,
            ),
            141 => 
            array (
                'delivery_type_id' => 2,
                'id' => 142,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 4,
            ),
            142 => 
            array (
                'delivery_type_id' => 2,
                'id' => 143,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 5,
            ),
            143 => 
            array (
                'delivery_type_id' => 2,
                'id' => 144,
                'price' => 900,
                'shop_delivery_area_set_id' => 12,
                'shop_id' => 1,
                'size_id' => 6,
            ),
        ));
        
        
    }
}