<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 9,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 10,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 11,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 12,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 13,
                'migration' => '2022_11_04_022059_create_sessions_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 14,
                'migration' => '2022_12_03_181043_create_admins_table',
                'batch' => 0,
            ),
            6 => 
            array (
                'id' => 15,
                'migration' => '2022_12_03_181043_create_failed_jobs_table',
                'batch' => 0,
            ),
            7 => 
            array (
                'id' => 16,
                'migration' => '2022_12_03_181043_create_password_resets_table',
                'batch' => 0,
            ),
            8 => 
            array (
                'id' => 17,
                'migration' => '2022_12_03_181043_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            9 => 
            array (
                'id' => 18,
                'migration' => '2022_12_03_181043_create_sessions_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'id' => 19,
                'migration' => '2022_12_03_181043_create_users_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 20,
                'migration' => '2022_12_03_181329_create_admins_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 21,
                'migration' => '2022_12_03_181329_create_failed_jobs_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 22,
                'migration' => '2022_12_03_181329_create_password_resets_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 23,
                'migration' => '2022_12_03_181329_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 24,
                'migration' => '2022_12_03_181329_create_sessions_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 25,
                'migration' => '2022_12_03_181329_create_users_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 26,
                'migration' => '2022_12_31_193222_create_notices_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 27,
                'migration' => '2022_12_31_193317_create_notices_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 28,
                'migration' => '2023_01_04_204238_create_admins_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 29,
                'migration' => '2023_01_04_204238_create_brands_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 30,
                'migration' => '2023_01_04_204238_create_categories_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 31,
                'migration' => '2023_01_04_204238_create_delivery_type_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 32,
                'migration' => '2023_01_04_204238_create_failed_jobs_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'id' => 33,
                'migration' => '2023_01_04_204238_create_filter_colors_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 34,
                'migration' => '2023_01_04_204238_create_filter_tags_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 35,
                'migration' => '2023_01_04_204238_create_item_checks_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'id' => 36,
                'migration' => '2023_01_04_204238_create_item_filter_colors_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'id' => 37,
                'migration' => '2023_01_04_204238_create_item_images_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'id' => 38,
                'migration' => '2023_01_04_204238_create_item_options_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'id' => 39,
                'migration' => '2023_01_04_204238_create_item_recommends_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'id' => 40,
                'migration' => '2023_01_04_204238_create_item_sizes_table',
                'batch' => 0,
            ),
            32 => 
            array (
                'id' => 41,
                'migration' => '2023_01_04_204238_create_item_variation_colors_table',
                'batch' => 0,
            ),
            33 => 
            array (
                'id' => 42,
                'migration' => '2023_01_04_204238_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 43,
                'migration' => '2023_01_04_204238_create_items_table',
                'batch' => 0,
            ),
            35 => 
            array (
                'id' => 44,
                'migration' => '2023_01_04_204238_create_notice_icons_table',
                'batch' => 0,
            ),
            36 => 
            array (
                'id' => 45,
                'migration' => '2023_01_04_204238_create_notices_table',
                'batch' => 0,
            ),
            37 => 
            array (
                'id' => 46,
                'migration' => '2023_01_04_204238_create_password_resets_table',
                'batch' => 0,
            ),
            38 => 
            array (
                'id' => 47,
                'migration' => '2023_01_04_204238_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            39 => 
            array (
                'id' => 48,
                'migration' => '2023_01_04_204238_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            40 => 
            array (
                'id' => 49,
                'migration' => '2023_01_04_204238_create_sessions_table',
                'batch' => 0,
            ),
            41 => 
            array (
                'id' => 50,
                'migration' => '2023_01_04_204238_create_shops_table',
                'batch' => 0,
            ),
            42 => 
            array (
                'id' => 51,
                'migration' => '2023_01_04_204238_create_sub_categories_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 52,
                'migration' => '2023_01_04_204238_create_users_table',
                'batch' => 0,
            ),
            44 => 
            array (
                'id' => 53,
                'migration' => '2023_01_05_024718_create_admins_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 54,
                'migration' => '2023_01_05_024718_create_brands_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 55,
                'migration' => '2023_01_05_024718_create_categories_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 56,
                'migration' => '2023_01_05_024718_create_delivery_type_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 57,
                'migration' => '2023_01_05_024718_create_failed_jobs_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 58,
                'migration' => '2023_01_05_024718_create_filter_colors_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 59,
                'migration' => '2023_01_05_024718_create_filter_tags_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 60,
                'migration' => '2023_01_05_024718_create_item_checks_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 61,
                'migration' => '2023_01_05_024718_create_item_filter_colors_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 62,
                'migration' => '2023_01_05_024718_create_item_images_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 63,
                'migration' => '2023_01_05_024718_create_item_options_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 64,
                'migration' => '2023_01_05_024718_create_item_recommends_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 65,
                'migration' => '2023_01_05_024718_create_item_sizes_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 66,
                'migration' => '2023_01_05_024718_create_item_variation_colors_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 67,
                'migration' => '2023_01_05_024718_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            59 => 
            array (
                'id' => 68,
                'migration' => '2023_01_05_024718_create_items_table',
                'batch' => 0,
            ),
            60 => 
            array (
                'id' => 69,
                'migration' => '2023_01_05_024718_create_notice_icons_table',
                'batch' => 0,
            ),
            61 => 
            array (
                'id' => 70,
                'migration' => '2023_01_05_024718_create_notices_table',
                'batch' => 0,
            ),
            62 => 
            array (
                'id' => 71,
                'migration' => '2023_01_05_024718_create_password_resets_table',
                'batch' => 0,
            ),
            63 => 
            array (
                'id' => 72,
                'migration' => '2023_01_05_024718_create_payments_table',
                'batch' => 0,
            ),
            64 => 
            array (
                'id' => 73,
                'migration' => '2023_01_05_024718_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            65 => 
            array (
                'id' => 74,
                'migration' => '2023_01_05_024718_create_prefectures_table',
                'batch' => 0,
            ),
            66 => 
            array (
                'id' => 75,
                'migration' => '2023_01_05_024718_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            67 => 
            array (
                'id' => 76,
                'migration' => '2023_01_05_024718_create_sessions_table',
                'batch' => 0,
            ),
            68 => 
            array (
                'id' => 77,
                'migration' => '2023_01_05_024718_create_shops_table',
                'batch' => 0,
            ),
            69 => 
            array (
                'id' => 78,
                'migration' => '2023_01_05_024718_create_sub_categories_table',
                'batch' => 0,
            ),
            70 => 
            array (
                'id' => 79,
                'migration' => '2023_01_05_024718_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            71 => 
            array (
                'id' => 80,
                'migration' => '2023_01_05_024718_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            72 => 
            array (
                'id' => 81,
                'migration' => '2023_01_05_024718_create_user_payment_informations_table',
                'batch' => 0,
            ),
            73 => 
            array (
                'id' => 82,
                'migration' => '2023_01_05_024718_create_users_table',
                'batch' => 0,
            ),
            74 => 
            array (
                'id' => 83,
                'migration' => '2023_01_20_032328_create_major_categories_table',
                'batch' => 0,
            ),
            75 => 
            array (
                'id' => 84,
                'migration' => '2023_01_20_154545_create_major_categories_table',
                'batch' => 0,
            ),
            76 => 
            array (
                'id' => 85,
                'migration' => '2023_01_20_160314_create_middle_categories_table',
                'batch' => 0,
            ),
            77 => 
            array (
                'id' => 86,
                'migration' => '2023_01_20_160448_create_minor_categories_table',
                'batch' => 0,
            ),
            78 => 
            array (
                'id' => 87,
                'migration' => '2023_01_20_170104_create_major_categories_table',
                'batch' => 0,
            ),
            79 => 
            array (
                'id' => 88,
                'migration' => '2023_01_20_170232_create_middle_categories_table',
                'batch' => 0,
            ),
            80 => 
            array (
                'id' => 89,
                'migration' => '2023_01_20_170233_add_foreign_keys_to_middle_categories_table',
                'batch' => 0,
            ),
            81 => 
            array (
                'id' => 90,
                'migration' => '2023_01_20_170236_create_minor_categories_table',
                'batch' => 0,
            ),
            82 => 
            array (
                'id' => 91,
                'migration' => '2023_01_20_170237_add_foreign_keys_to_minor_categories_table',
                'batch' => 0,
            ),
            83 => 
            array (
                'id' => 92,
                'migration' => '2023_01_20_170334_create_items_table',
                'batch' => 0,
            ),
            84 => 
            array (
                'id' => 93,
                'migration' => '2023_01_20_170335_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            85 => 
            array (
                'id' => 94,
                'migration' => '2023_01_25_114659_create_categories_table',
                'batch' => 0,
            ),
            86 => 
            array (
                'id' => 95,
                'migration' => '2023_01_25_134919_create_categories_table',
                'batch' => 0,
            ),
            87 => 
            array (
                'id' => 96,
                'migration' => '2023_01_25_134920_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            88 => 
            array (
                'id' => 97,
                'migration' => '2023_01_25_170642_create_categories_table',
                'batch' => 0,
            ),
            89 => 
            array (
                'id' => 98,
                'migration' => '2023_01_25_170643_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            90 => 
            array (
                'id' => 99,
                'migration' => '2023_01_25_170909_create_images_table',
                'batch' => 0,
            ),
            91 => 
            array (
                'id' => 100,
                'migration' => '2023_01_25_171034_create_sub_categories_table',
                'batch' => 0,
            ),
            92 => 
            array (
                'id' => 101,
                'migration' => '2023_01_25_171035_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            93 => 
            array (
                'id' => 102,
                'migration' => '2023_01_26_170435_create_admins_table',
                'batch' => 0,
            ),
            94 => 
            array (
                'id' => 103,
                'migration' => '2023_01_26_170435_create_brands_table',
                'batch' => 0,
            ),
            95 => 
            array (
                'id' => 104,
                'migration' => '2023_01_26_170435_create_categories_table',
                'batch' => 0,
            ),
            96 => 
            array (
                'id' => 105,
                'migration' => '2023_01_26_170435_create_delivery_type_table',
                'batch' => 0,
            ),
            97 => 
            array (
                'id' => 106,
                'migration' => '2023_01_26_170435_create_failed_jobs_table',
                'batch' => 0,
            ),
            98 => 
            array (
                'id' => 107,
                'migration' => '2023_01_26_170435_create_filter_colors_table',
                'batch' => 0,
            ),
            99 => 
            array (
                'id' => 108,
                'migration' => '2023_01_26_170435_create_filter_tags_table',
                'batch' => 0,
            ),
            100 => 
            array (
                'id' => 109,
                'migration' => '2023_01_26_170435_create_images_table',
                'batch' => 0,
            ),
            101 => 
            array (
                'id' => 110,
                'migration' => '2023_01_26_170435_create_item_checks_table',
                'batch' => 0,
            ),
            102 => 
            array (
                'id' => 111,
                'migration' => '2023_01_26_170435_create_item_filter_colors_table',
                'batch' => 0,
            ),
            103 => 
            array (
                'id' => 112,
                'migration' => '2023_01_26_170435_create_item_images_table',
                'batch' => 0,
            ),
            104 => 
            array (
                'id' => 113,
                'migration' => '2023_01_26_170435_create_item_options_table',
                'batch' => 0,
            ),
            105 => 
            array (
                'id' => 114,
                'migration' => '2023_01_26_170435_create_item_recommends_table',
                'batch' => 0,
            ),
            106 => 
            array (
                'id' => 115,
                'migration' => '2023_01_26_170435_create_item_sizes_table',
                'batch' => 0,
            ),
            107 => 
            array (
                'id' => 116,
                'migration' => '2023_01_26_170435_create_item_variation_colors_table',
                'batch' => 0,
            ),
            108 => 
            array (
                'id' => 117,
                'migration' => '2023_01_26_170435_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            109 => 
            array (
                'id' => 118,
                'migration' => '2023_01_26_170435_create_items_table',
                'batch' => 0,
            ),
            110 => 
            array (
                'id' => 119,
                'migration' => '2023_01_26_170435_create_notice_icons_table',
                'batch' => 0,
            ),
            111 => 
            array (
                'id' => 120,
                'migration' => '2023_01_26_170435_create_notices_table',
                'batch' => 0,
            ),
            112 => 
            array (
                'id' => 121,
                'migration' => '2023_01_26_170435_create_password_resets_table',
                'batch' => 0,
            ),
            113 => 
            array (
                'id' => 122,
                'migration' => '2023_01_26_170435_create_payments_table',
                'batch' => 0,
            ),
            114 => 
            array (
                'id' => 123,
                'migration' => '2023_01_26_170435_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            115 => 
            array (
                'id' => 124,
                'migration' => '2023_01_26_170435_create_prefectures_table',
                'batch' => 0,
            ),
            116 => 
            array (
                'id' => 125,
                'migration' => '2023_01_26_170435_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            117 => 
            array (
                'id' => 126,
                'migration' => '2023_01_26_170435_create_sessions_table',
                'batch' => 0,
            ),
            118 => 
            array (
                'id' => 127,
                'migration' => '2023_01_26_170435_create_shops_table',
                'batch' => 0,
            ),
            119 => 
            array (
                'id' => 128,
                'migration' => '2023_01_26_170435_create_sub_categories_table',
                'batch' => 0,
            ),
            120 => 
            array (
                'id' => 129,
                'migration' => '2023_01_26_170435_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            121 => 
            array (
                'id' => 130,
                'migration' => '2023_01_26_170435_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            122 => 
            array (
                'id' => 131,
                'migration' => '2023_01_26_170435_create_user_payment_informations_table',
                'batch' => 0,
            ),
            123 => 
            array (
                'id' => 132,
                'migration' => '2023_01_26_170435_create_users_table',
                'batch' => 0,
            ),
            124 => 
            array (
                'id' => 133,
                'migration' => '2023_01_26_170436_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            125 => 
            array (
                'id' => 134,
                'migration' => '2023_01_26_170436_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            126 => 
            array (
                'id' => 135,
                'migration' => '2023_01_26_170436_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            127 => 
            array (
                'id' => 136,
                'migration' => '2023_01_26_170436_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            128 => 
            array (
                'id' => 137,
                'migration' => '2023_01_26_170436_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            129 => 
            array (
                'id' => 138,
                'migration' => '2023_01_26_174245_create_items_table',
                'batch' => 0,
            ),
            130 => 
            array (
                'id' => 139,
                'migration' => '2023_01_26_174246_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            131 => 
            array (
                'id' => 140,
                'migration' => '2023_01_27_110653_create_coupons_table',
                'batch' => 0,
            ),
            132 => 
            array (
                'id' => 141,
                'migration' => '2023_01_27_110654_add_foreign_keys_to_coupons_table',
                'batch' => 0,
            ),
            133 => 
            array (
                'id' => 142,
                'migration' => '2023_01_27_132821_create_ads_table',
                'batch' => 0,
            ),
            134 => 
            array (
                'id' => 143,
                'migration' => '2023_01_27_140326_create_ads_table',
                'batch' => 0,
            ),
            135 => 
            array (
                'id' => 144,
                'migration' => '2023_01_27_140327_add_foreign_keys_to_ads_table',
                'batch' => 0,
            ),
            136 => 
            array (
                'id' => 145,
                'migration' => '2023_01_27_143634_create_item_images_table',
                'batch' => 0,
            ),
            137 => 
            array (
                'id' => 146,
                'migration' => '2023_01_27_143635_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            138 => 
            array (
                'id' => 147,
                'migration' => '2023_01_27_190310_create_brands_table',
                'batch' => 0,
            ),
            139 => 
            array (
                'id' => 148,
                'migration' => '2023_01_27_190311_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            140 => 
            array (
                'id' => 149,
                'migration' => '2023_02_03_154530_create_admins_table',
                'batch' => 0,
            ),
            141 => 
            array (
                'id' => 150,
                'migration' => '2023_02_03_154530_create_ads_table',
                'batch' => 0,
            ),
            142 => 
            array (
                'id' => 151,
                'migration' => '2023_02_03_154530_create_brands_table',
                'batch' => 0,
            ),
            143 => 
            array (
                'id' => 152,
                'migration' => '2023_02_03_154530_create_categories_table',
                'batch' => 0,
            ),
            144 => 
            array (
                'id' => 153,
                'migration' => '2023_02_03_154530_create_coupons_table',
                'batch' => 0,
            ),
            145 => 
            array (
                'id' => 154,
                'migration' => '2023_02_03_154530_create_delivery_type_table',
                'batch' => 0,
            ),
            146 => 
            array (
                'id' => 155,
                'migration' => '2023_02_03_154530_create_failed_jobs_table',
                'batch' => 0,
            ),
            147 => 
            array (
                'id' => 156,
                'migration' => '2023_02_03_154530_create_filter_colors_table',
                'batch' => 0,
            ),
            148 => 
            array (
                'id' => 157,
                'migration' => '2023_02_03_154530_create_filter_tags_table',
                'batch' => 0,
            ),
            149 => 
            array (
                'id' => 158,
                'migration' => '2023_02_03_154530_create_images_table',
                'batch' => 0,
            ),
            150 => 
            array (
                'id' => 159,
                'migration' => '2023_02_03_154530_create_item_checks_table',
                'batch' => 0,
            ),
            151 => 
            array (
                'id' => 160,
                'migration' => '2023_02_03_154530_create_item_filter_colors_table',
                'batch' => 0,
            ),
            152 => 
            array (
                'id' => 161,
                'migration' => '2023_02_03_154530_create_item_images_table',
                'batch' => 0,
            ),
            153 => 
            array (
                'id' => 162,
                'migration' => '2023_02_03_154530_create_item_options_table',
                'batch' => 0,
            ),
            154 => 
            array (
                'id' => 163,
                'migration' => '2023_02_03_154530_create_item_recommends_table',
                'batch' => 0,
            ),
            155 => 
            array (
                'id' => 164,
                'migration' => '2023_02_03_154530_create_item_sizes_table',
                'batch' => 0,
            ),
            156 => 
            array (
                'id' => 165,
                'migration' => '2023_02_03_154530_create_item_variation_colors_table',
                'batch' => 0,
            ),
            157 => 
            array (
                'id' => 166,
                'migration' => '2023_02_03_154530_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            158 => 
            array (
                'id' => 167,
                'migration' => '2023_02_03_154530_create_items_table',
                'batch' => 0,
            ),
            159 => 
            array (
                'id' => 168,
                'migration' => '2023_02_03_154530_create_notice_icons_table',
                'batch' => 0,
            ),
            160 => 
            array (
                'id' => 169,
                'migration' => '2023_02_03_154530_create_notices_table',
                'batch' => 0,
            ),
            161 => 
            array (
                'id' => 170,
                'migration' => '2023_02_03_154530_create_password_resets_table',
                'batch' => 0,
            ),
            162 => 
            array (
                'id' => 171,
                'migration' => '2023_02_03_154530_create_payments_table',
                'batch' => 0,
            ),
            163 => 
            array (
                'id' => 172,
                'migration' => '2023_02_03_154530_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            164 => 
            array (
                'id' => 173,
                'migration' => '2023_02_03_154530_create_prefectures_table',
                'batch' => 0,
            ),
            165 => 
            array (
                'id' => 174,
                'migration' => '2023_02_03_154530_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            166 => 
            array (
                'id' => 175,
                'migration' => '2023_02_03_154530_create_sessions_table',
                'batch' => 0,
            ),
            167 => 
            array (
                'id' => 176,
                'migration' => '2023_02_03_154530_create_shops_table',
                'batch' => 0,
            ),
            168 => 
            array (
                'id' => 177,
                'migration' => '2023_02_03_154530_create_sub_categories_table',
                'batch' => 0,
            ),
            169 => 
            array (
                'id' => 178,
                'migration' => '2023_02_03_154530_create_top_banners_table',
                'batch' => 0,
            ),
            170 => 
            array (
                'id' => 179,
                'migration' => '2023_02_03_154530_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            171 => 
            array (
                'id' => 180,
                'migration' => '2023_02_03_154530_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            172 => 
            array (
                'id' => 181,
                'migration' => '2023_02_03_154530_create_user_payment_informations_table',
                'batch' => 0,
            ),
            173 => 
            array (
                'id' => 182,
                'migration' => '2023_02_03_154530_create_users_table',
                'batch' => 0,
            ),
            174 => 
            array (
                'id' => 183,
                'migration' => '2023_02_03_154531_add_foreign_keys_to_ads_table',
                'batch' => 0,
            ),
            175 => 
            array (
                'id' => 184,
                'migration' => '2023_02_03_154531_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            176 => 
            array (
                'id' => 185,
                'migration' => '2023_02_03_154531_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            177 => 
            array (
                'id' => 186,
                'migration' => '2023_02_03_154531_add_foreign_keys_to_coupons_table',
                'batch' => 0,
            ),
            178 => 
            array (
                'id' => 187,
                'migration' => '2023_02_03_154531_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            179 => 
            array (
                'id' => 188,
                'migration' => '2023_02_03_154531_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            180 => 
            array (
                'id' => 189,
                'migration' => '2023_02_03_154531_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            181 => 
            array (
                'id' => 190,
                'migration' => '2023_02_03_154531_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            182 => 
            array (
                'id' => 191,
                'migration' => '2023_02_03_154531_add_foreign_keys_to_top_banners_table',
                'batch' => 0,
            ),
            183 => 
            array (
                'id' => 192,
                'migration' => '2023_02_13_115017_create_admins_table',
                'batch' => 0,
            ),
            184 => 
            array (
                'id' => 193,
                'migration' => '2023_02_13_115017_create_ads_table',
                'batch' => 0,
            ),
            185 => 
            array (
                'id' => 194,
                'migration' => '2023_02_13_115017_create_brands_table',
                'batch' => 0,
            ),
            186 => 
            array (
                'id' => 195,
                'migration' => '2023_02_13_115017_create_categories_table',
                'batch' => 0,
            ),
            187 => 
            array (
                'id' => 196,
                'migration' => '2023_02_13_115017_create_coupons_table',
                'batch' => 0,
            ),
            188 => 
            array (
                'id' => 197,
                'migration' => '2023_02_13_115017_create_delivery_type_table',
                'batch' => 0,
            ),
            189 => 
            array (
                'id' => 198,
                'migration' => '2023_02_13_115017_create_failed_jobs_table',
                'batch' => 0,
            ),
            190 => 
            array (
                'id' => 199,
                'migration' => '2023_02_13_115017_create_filter_colors_table',
                'batch' => 0,
            ),
            191 => 
            array (
                'id' => 200,
                'migration' => '2023_02_13_115017_create_filter_tags_table',
                'batch' => 0,
            ),
            192 => 
            array (
                'id' => 201,
                'migration' => '2023_02_13_115017_create_images_table',
                'batch' => 0,
            ),
            193 => 
            array (
                'id' => 202,
                'migration' => '2023_02_13_115017_create_item_checks_table',
                'batch' => 0,
            ),
            194 => 
            array (
                'id' => 203,
                'migration' => '2023_02_13_115017_create_item_filter_colors_table',
                'batch' => 0,
            ),
            195 => 
            array (
                'id' => 204,
                'migration' => '2023_02_13_115017_create_item_images_table',
                'batch' => 0,
            ),
            196 => 
            array (
                'id' => 205,
                'migration' => '2023_02_13_115017_create_item_options_table',
                'batch' => 0,
            ),
            197 => 
            array (
                'id' => 206,
                'migration' => '2023_02_13_115017_create_item_recommends_table',
                'batch' => 0,
            ),
            198 => 
            array (
                'id' => 207,
                'migration' => '2023_02_13_115017_create_item_sizes_table',
                'batch' => 0,
            ),
            199 => 
            array (
                'id' => 208,
                'migration' => '2023_02_13_115017_create_item_variation_colors_table',
                'batch' => 0,
            ),
            200 => 
            array (
                'id' => 209,
                'migration' => '2023_02_13_115017_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            201 => 
            array (
                'id' => 210,
                'migration' => '2023_02_13_115017_create_items_table',
                'batch' => 0,
            ),
            202 => 
            array (
                'id' => 211,
                'migration' => '2023_02_13_115017_create_notice_icons_table',
                'batch' => 0,
            ),
            203 => 
            array (
                'id' => 212,
                'migration' => '2023_02_13_115017_create_notices_table',
                'batch' => 0,
            ),
            204 => 
            array (
                'id' => 213,
                'migration' => '2023_02_13_115017_create_password_resets_table',
                'batch' => 0,
            ),
            205 => 
            array (
                'id' => 214,
                'migration' => '2023_02_13_115017_create_payments_table',
                'batch' => 0,
            ),
            206 => 
            array (
                'id' => 215,
                'migration' => '2023_02_13_115017_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            207 => 
            array (
                'id' => 216,
                'migration' => '2023_02_13_115017_create_prefectures_table',
                'batch' => 0,
            ),
            208 => 
            array (
                'id' => 217,
                'migration' => '2023_02_13_115017_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            209 => 
            array (
                'id' => 218,
                'migration' => '2023_02_13_115017_create_sessions_table',
                'batch' => 0,
            ),
            210 => 
            array (
                'id' => 219,
                'migration' => '2023_02_13_115017_create_shops_table',
                'batch' => 0,
            ),
            211 => 
            array (
                'id' => 220,
                'migration' => '2023_02_13_115017_create_sub_categories_table',
                'batch' => 0,
            ),
            212 => 
            array (
                'id' => 221,
                'migration' => '2023_02_13_115017_create_top_banners_table',
                'batch' => 0,
            ),
            213 => 
            array (
                'id' => 222,
                'migration' => '2023_02_13_115017_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            214 => 
            array (
                'id' => 223,
                'migration' => '2023_02_13_115017_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            215 => 
            array (
                'id' => 224,
                'migration' => '2023_02_13_115017_create_user_payment_informations_table',
                'batch' => 0,
            ),
            216 => 
            array (
                'id' => 225,
                'migration' => '2023_02_13_115017_create_users_table',
                'batch' => 0,
            ),
            217 => 
            array (
                'id' => 226,
                'migration' => '2023_02_13_115018_add_foreign_keys_to_ads_table',
                'batch' => 0,
            ),
            218 => 
            array (
                'id' => 227,
                'migration' => '2023_02_13_115018_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            219 => 
            array (
                'id' => 228,
                'migration' => '2023_02_13_115018_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            220 => 
            array (
                'id' => 229,
                'migration' => '2023_02_13_115018_add_foreign_keys_to_coupons_table',
                'batch' => 0,
            ),
            221 => 
            array (
                'id' => 230,
                'migration' => '2023_02_13_115018_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            222 => 
            array (
                'id' => 231,
                'migration' => '2023_02_13_115018_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            223 => 
            array (
                'id' => 232,
                'migration' => '2023_02_13_115018_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            224 => 
            array (
                'id' => 233,
                'migration' => '2023_02_13_115018_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            225 => 
            array (
                'id' => 234,
                'migration' => '2023_02_13_115018_add_foreign_keys_to_top_banners_table',
                'batch' => 0,
            ),
            226 => 
            array (
                'id' => 235,
                'migration' => '2023_02_14_150229_create_tags_table',
                'batch' => 0,
            ),
            227 => 
            array (
                'id' => 236,
                'migration' => '2023_02_15_143739_create_admins_table',
                'batch' => 0,
            ),
            228 => 
            array (
                'id' => 237,
                'migration' => '2023_02_15_143739_create_ads_table',
                'batch' => 0,
            ),
            229 => 
            array (
                'id' => 238,
                'migration' => '2023_02_15_143739_create_brands_table',
                'batch' => 0,
            ),
            230 => 
            array (
                'id' => 239,
                'migration' => '2023_02_15_143739_create_categories_table',
                'batch' => 0,
            ),
            231 => 
            array (
                'id' => 240,
                'migration' => '2023_02_15_143739_create_coupons_table',
                'batch' => 0,
            ),
            232 => 
            array (
                'id' => 241,
                'migration' => '2023_02_15_143739_create_delivery_type_table',
                'batch' => 0,
            ),
            233 => 
            array (
                'id' => 242,
                'migration' => '2023_02_15_143739_create_failed_jobs_table',
                'batch' => 0,
            ),
            234 => 
            array (
                'id' => 243,
                'migration' => '2023_02_15_143739_create_filter_colors_table',
                'batch' => 0,
            ),
            235 => 
            array (
                'id' => 244,
                'migration' => '2023_02_15_143739_create_filter_tags_table',
                'batch' => 0,
            ),
            236 => 
            array (
                'id' => 245,
                'migration' => '2023_02_15_143739_create_images_table',
                'batch' => 0,
            ),
            237 => 
            array (
                'id' => 246,
                'migration' => '2023_02_15_143739_create_item_checks_table',
                'batch' => 0,
            ),
            238 => 
            array (
                'id' => 247,
                'migration' => '2023_02_15_143739_create_item_filter_colors_table',
                'batch' => 0,
            ),
            239 => 
            array (
                'id' => 248,
                'migration' => '2023_02_15_143739_create_item_images_table',
                'batch' => 0,
            ),
            240 => 
            array (
                'id' => 249,
                'migration' => '2023_02_15_143739_create_item_options_table',
                'batch' => 0,
            ),
            241 => 
            array (
                'id' => 250,
                'migration' => '2023_02_15_143739_create_item_recommends_table',
                'batch' => 0,
            ),
            242 => 
            array (
                'id' => 251,
                'migration' => '2023_02_15_143739_create_item_sizes_table',
                'batch' => 0,
            ),
            243 => 
            array (
                'id' => 252,
                'migration' => '2023_02_15_143739_create_item_variation_colors_table',
                'batch' => 0,
            ),
            244 => 
            array (
                'id' => 253,
                'migration' => '2023_02_15_143739_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            245 => 
            array (
                'id' => 254,
                'migration' => '2023_02_15_143739_create_items_table',
                'batch' => 0,
            ),
            246 => 
            array (
                'id' => 255,
                'migration' => '2023_02_15_143739_create_notice_icons_table',
                'batch' => 0,
            ),
            247 => 
            array (
                'id' => 256,
                'migration' => '2023_02_15_143739_create_notices_table',
                'batch' => 0,
            ),
            248 => 
            array (
                'id' => 257,
                'migration' => '2023_02_15_143739_create_password_resets_table',
                'batch' => 0,
            ),
            249 => 
            array (
                'id' => 258,
                'migration' => '2023_02_15_143739_create_payments_table',
                'batch' => 0,
            ),
            250 => 
            array (
                'id' => 259,
                'migration' => '2023_02_15_143739_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            251 => 
            array (
                'id' => 260,
                'migration' => '2023_02_15_143739_create_prefectures_table',
                'batch' => 0,
            ),
            252 => 
            array (
                'id' => 261,
                'migration' => '2023_02_15_143739_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            253 => 
            array (
                'id' => 262,
                'migration' => '2023_02_15_143739_create_sessions_table',
                'batch' => 0,
            ),
            254 => 
            array (
                'id' => 263,
                'migration' => '2023_02_15_143739_create_shops_table',
                'batch' => 0,
            ),
            255 => 
            array (
                'id' => 264,
                'migration' => '2023_02_15_143739_create_sub_categories_table',
                'batch' => 0,
            ),
            256 => 
            array (
                'id' => 265,
                'migration' => '2023_02_15_143739_create_tags_table',
                'batch' => 0,
            ),
            257 => 
            array (
                'id' => 266,
                'migration' => '2023_02_15_143739_create_top_banners_table',
                'batch' => 0,
            ),
            258 => 
            array (
                'id' => 267,
                'migration' => '2023_02_15_143739_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            259 => 
            array (
                'id' => 268,
                'migration' => '2023_02_15_143739_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            260 => 
            array (
                'id' => 269,
                'migration' => '2023_02_15_143739_create_user_payment_informations_table',
                'batch' => 0,
            ),
            261 => 
            array (
                'id' => 270,
                'migration' => '2023_02_15_143739_create_users_table',
                'batch' => 0,
            ),
            262 => 
            array (
                'id' => 271,
                'migration' => '2023_02_15_143740_add_foreign_keys_to_ads_table',
                'batch' => 0,
            ),
            263 => 
            array (
                'id' => 272,
                'migration' => '2023_02_15_143740_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            264 => 
            array (
                'id' => 273,
                'migration' => '2023_02_15_143740_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            265 => 
            array (
                'id' => 274,
                'migration' => '2023_02_15_143740_add_foreign_keys_to_coupons_table',
                'batch' => 0,
            ),
            266 => 
            array (
                'id' => 275,
                'migration' => '2023_02_15_143740_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            267 => 
            array (
                'id' => 276,
                'migration' => '2023_02_15_143740_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            268 => 
            array (
                'id' => 277,
                'migration' => '2023_02_15_143740_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            269 => 
            array (
                'id' => 278,
                'migration' => '2023_02_15_143740_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            270 => 
            array (
                'id' => 279,
                'migration' => '2023_02_15_143740_add_foreign_keys_to_top_banners_table',
                'batch' => 0,
            ),
            271 => 
            array (
                'id' => 280,
                'migration' => '2023_02_21_155833_create_admins_table',
                'batch' => 0,
            ),
            272 => 
            array (
                'id' => 281,
                'migration' => '2023_02_21_155833_create_ads_table',
                'batch' => 0,
            ),
            273 => 
            array (
                'id' => 282,
                'migration' => '2023_02_21_155833_create_brands_table',
                'batch' => 0,
            ),
            274 => 
            array (
                'id' => 283,
                'migration' => '2023_02_21_155833_create_categories_table',
                'batch' => 0,
            ),
            275 => 
            array (
                'id' => 284,
                'migration' => '2023_02_21_155833_create_coupons_table',
                'batch' => 0,
            ),
            276 => 
            array (
                'id' => 285,
                'migration' => '2023_02_21_155833_create_delivery_type_table',
                'batch' => 0,
            ),
            277 => 
            array (
                'id' => 286,
                'migration' => '2023_02_21_155833_create_failed_jobs_table',
                'batch' => 0,
            ),
            278 => 
            array (
                'id' => 287,
                'migration' => '2023_02_21_155833_create_filter_colors_table',
                'batch' => 0,
            ),
            279 => 
            array (
                'id' => 288,
                'migration' => '2023_02_21_155833_create_filter_tags_table',
                'batch' => 0,
            ),
            280 => 
            array (
                'id' => 289,
                'migration' => '2023_02_21_155833_create_images_table',
                'batch' => 0,
            ),
            281 => 
            array (
                'id' => 290,
                'migration' => '2023_02_21_155833_create_item_checks_table',
                'batch' => 0,
            ),
            282 => 
            array (
                'id' => 291,
                'migration' => '2023_02_21_155833_create_item_filter_colors_table',
                'batch' => 0,
            ),
            283 => 
            array (
                'id' => 292,
                'migration' => '2023_02_21_155833_create_item_images_table',
                'batch' => 0,
            ),
            284 => 
            array (
                'id' => 293,
                'migration' => '2023_02_21_155833_create_item_options_table',
                'batch' => 0,
            ),
            285 => 
            array (
                'id' => 294,
                'migration' => '2023_02_21_155833_create_item_recommends_table',
                'batch' => 0,
            ),
            286 => 
            array (
                'id' => 295,
                'migration' => '2023_02_21_155833_create_item_sizes_table',
                'batch' => 0,
            ),
            287 => 
            array (
                'id' => 296,
                'migration' => '2023_02_21_155833_create_item_variation_colors_table',
                'batch' => 0,
            ),
            288 => 
            array (
                'id' => 297,
                'migration' => '2023_02_21_155833_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            289 => 
            array (
                'id' => 298,
                'migration' => '2023_02_21_155833_create_items_table',
                'batch' => 0,
            ),
            290 => 
            array (
                'id' => 299,
                'migration' => '2023_02_21_155833_create_notice_icons_table',
                'batch' => 0,
            ),
            291 => 
            array (
                'id' => 300,
                'migration' => '2023_02_21_155833_create_notices_table',
                'batch' => 0,
            ),
            292 => 
            array (
                'id' => 301,
                'migration' => '2023_02_21_155833_create_password_resets_table',
                'batch' => 0,
            ),
            293 => 
            array (
                'id' => 302,
                'migration' => '2023_02_21_155833_create_payments_table',
                'batch' => 0,
            ),
            294 => 
            array (
                'id' => 303,
                'migration' => '2023_02_21_155833_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            295 => 
            array (
                'id' => 304,
                'migration' => '2023_02_21_155833_create_prefectures_table',
                'batch' => 0,
            ),
            296 => 
            array (
                'id' => 305,
                'migration' => '2023_02_21_155833_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            297 => 
            array (
                'id' => 306,
                'migration' => '2023_02_21_155833_create_sessions_table',
                'batch' => 0,
            ),
            298 => 
            array (
                'id' => 307,
                'migration' => '2023_02_21_155833_create_shops_table',
                'batch' => 0,
            ),
            299 => 
            array (
                'id' => 308,
                'migration' => '2023_02_21_155833_create_sub_categories_table',
                'batch' => 0,
            ),
            300 => 
            array (
                'id' => 309,
                'migration' => '2023_02_21_155833_create_tags_table',
                'batch' => 0,
            ),
            301 => 
            array (
                'id' => 310,
                'migration' => '2023_02_21_155833_create_top_banners_table',
                'batch' => 0,
            ),
            302 => 
            array (
                'id' => 311,
                'migration' => '2023_02_21_155833_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            303 => 
            array (
                'id' => 312,
                'migration' => '2023_02_21_155833_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            304 => 
            array (
                'id' => 313,
                'migration' => '2023_02_21_155833_create_user_payment_informations_table',
                'batch' => 0,
            ),
            305 => 
            array (
                'id' => 314,
                'migration' => '2023_02_21_155833_create_users_table',
                'batch' => 0,
            ),
            306 => 
            array (
                'id' => 315,
                'migration' => '2023_02_21_155834_add_foreign_keys_to_ads_table',
                'batch' => 0,
            ),
            307 => 
            array (
                'id' => 316,
                'migration' => '2023_02_21_155834_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            308 => 
            array (
                'id' => 317,
                'migration' => '2023_02_21_155834_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            309 => 
            array (
                'id' => 318,
                'migration' => '2023_02_21_155834_add_foreign_keys_to_coupons_table',
                'batch' => 0,
            ),
            310 => 
            array (
                'id' => 319,
                'migration' => '2023_02_21_155834_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            311 => 
            array (
                'id' => 320,
                'migration' => '2023_02_21_155834_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            312 => 
            array (
                'id' => 321,
                'migration' => '2023_02_21_155834_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            313 => 
            array (
                'id' => 322,
                'migration' => '2023_02_21_155834_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            314 => 
            array (
                'id' => 323,
                'migration' => '2023_02_21_155834_add_foreign_keys_to_top_banners_table',
                'batch' => 0,
            ),
            315 => 
            array (
                'id' => 324,
                'migration' => '2023_02_24_151643_create_admins_table',
                'batch' => 0,
            ),
            316 => 
            array (
                'id' => 325,
                'migration' => '2023_02_24_151643_create_ads_table',
                'batch' => 0,
            ),
            317 => 
            array (
                'id' => 326,
                'migration' => '2023_02_24_151643_create_brands_table',
                'batch' => 0,
            ),
            318 => 
            array (
                'id' => 327,
                'migration' => '2023_02_24_151643_create_categories_table',
                'batch' => 0,
            ),
            319 => 
            array (
                'id' => 328,
                'migration' => '2023_02_24_151643_create_coupons_table',
                'batch' => 0,
            ),
            320 => 
            array (
                'id' => 329,
                'migration' => '2023_02_24_151643_create_delivery_type_table',
                'batch' => 0,
            ),
            321 => 
            array (
                'id' => 330,
                'migration' => '2023_02_24_151643_create_failed_jobs_table',
                'batch' => 0,
            ),
            322 => 
            array (
                'id' => 331,
                'migration' => '2023_02_24_151643_create_filter_colors_table',
                'batch' => 0,
            ),
            323 => 
            array (
                'id' => 332,
                'migration' => '2023_02_24_151643_create_filter_tags_table',
                'batch' => 0,
            ),
            324 => 
            array (
                'id' => 333,
                'migration' => '2023_02_24_151643_create_images_table',
                'batch' => 0,
            ),
            325 => 
            array (
                'id' => 334,
                'migration' => '2023_02_24_151643_create_item_checks_table',
                'batch' => 0,
            ),
            326 => 
            array (
                'id' => 335,
                'migration' => '2023_02_24_151643_create_item_filter_colors_table',
                'batch' => 0,
            ),
            327 => 
            array (
                'id' => 336,
                'migration' => '2023_02_24_151643_create_item_images_table',
                'batch' => 0,
            ),
            328 => 
            array (
                'id' => 337,
                'migration' => '2023_02_24_151643_create_item_options_table',
                'batch' => 0,
            ),
            329 => 
            array (
                'id' => 338,
                'migration' => '2023_02_24_151643_create_item_recommends_table',
                'batch' => 0,
            ),
            330 => 
            array (
                'id' => 339,
                'migration' => '2023_02_24_151643_create_item_sizes_table',
                'batch' => 0,
            ),
            331 => 
            array (
                'id' => 340,
                'migration' => '2023_02_24_151643_create_item_variation_colors_table',
                'batch' => 0,
            ),
            332 => 
            array (
                'id' => 341,
                'migration' => '2023_02_24_151643_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            333 => 
            array (
                'id' => 342,
                'migration' => '2023_02_24_151643_create_items_table',
                'batch' => 0,
            ),
            334 => 
            array (
                'id' => 343,
                'migration' => '2023_02_24_151643_create_notice_icons_table',
                'batch' => 0,
            ),
            335 => 
            array (
                'id' => 344,
                'migration' => '2023_02_24_151643_create_notices_table',
                'batch' => 0,
            ),
            336 => 
            array (
                'id' => 345,
                'migration' => '2023_02_24_151643_create_password_resets_table',
                'batch' => 0,
            ),
            337 => 
            array (
                'id' => 346,
                'migration' => '2023_02_24_151643_create_payments_table',
                'batch' => 0,
            ),
            338 => 
            array (
                'id' => 347,
                'migration' => '2023_02_24_151643_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            339 => 
            array (
                'id' => 348,
                'migration' => '2023_02_24_151643_create_prefectures_table',
                'batch' => 0,
            ),
            340 => 
            array (
                'id' => 349,
                'migration' => '2023_02_24_151643_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            341 => 
            array (
                'id' => 350,
                'migration' => '2023_02_24_151643_create_sessions_table',
                'batch' => 0,
            ),
            342 => 
            array (
                'id' => 351,
                'migration' => '2023_02_24_151643_create_shops_table',
                'batch' => 0,
            ),
            343 => 
            array (
                'id' => 352,
                'migration' => '2023_02_24_151643_create_sub_categories_table',
                'batch' => 0,
            ),
            344 => 
            array (
                'id' => 353,
                'migration' => '2023_02_24_151643_create_tags_table',
                'batch' => 0,
            ),
            345 => 
            array (
                'id' => 354,
                'migration' => '2023_02_24_151643_create_top_banners_table',
                'batch' => 0,
            ),
            346 => 
            array (
                'id' => 355,
                'migration' => '2023_02_24_151643_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            347 => 
            array (
                'id' => 356,
                'migration' => '2023_02_24_151643_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            348 => 
            array (
                'id' => 357,
                'migration' => '2023_02_24_151643_create_user_payment_informations_table',
                'batch' => 0,
            ),
            349 => 
            array (
                'id' => 358,
                'migration' => '2023_02_24_151643_create_users_table',
                'batch' => 0,
            ),
            350 => 
            array (
                'id' => 359,
                'migration' => '2023_02_24_151644_add_foreign_keys_to_ads_table',
                'batch' => 0,
            ),
            351 => 
            array (
                'id' => 360,
                'migration' => '2023_02_24_151644_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            352 => 
            array (
                'id' => 361,
                'migration' => '2023_02_24_151644_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            353 => 
            array (
                'id' => 362,
                'migration' => '2023_02_24_151644_add_foreign_keys_to_coupons_table',
                'batch' => 0,
            ),
            354 => 
            array (
                'id' => 363,
                'migration' => '2023_02_24_151644_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            355 => 
            array (
                'id' => 364,
                'migration' => '2023_02_24_151644_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            356 => 
            array (
                'id' => 365,
                'migration' => '2023_02_24_151644_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            357 => 
            array (
                'id' => 366,
                'migration' => '2023_02_24_151644_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            358 => 
            array (
                'id' => 367,
                'migration' => '2023_02_24_151644_add_foreign_keys_to_top_banners_table',
                'batch' => 0,
            ),
            359 => 
            array (
                'id' => 368,
                'migration' => '2023_02_24_165208_create_shops_table',
                'batch' => 0,
            ),
            360 => 
            array (
                'id' => 369,
                'migration' => '2023_02_24_165209_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            361 => 
            array (
                'id' => 370,
                'migration' => '2023_02_28_160339_create_sub_categories_table',
                'batch' => 0,
            ),
            362 => 
            array (
                'id' => 371,
                'migration' => '2023_02_28_160340_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            363 => 
            array (
                'id' => 372,
                'migration' => '2023_03_03_031601_create_coupon_target_items_table',
                'batch' => 2,
            ),
            364 => 
            array (
                'id' => 373,
                'migration' => '2023_03_15_165405_create_admins_table',
                'batch' => 0,
            ),
            365 => 
            array (
                'id' => 374,
                'migration' => '2023_03_15_165405_create_ads_table',
                'batch' => 0,
            ),
            366 => 
            array (
                'id' => 375,
                'migration' => '2023_03_15_165405_create_brands_table',
                'batch' => 0,
            ),
            367 => 
            array (
                'id' => 376,
                'migration' => '2023_03_15_165405_create_categories_table',
                'batch' => 0,
            ),
            368 => 
            array (
                'id' => 377,
                'migration' => '2023_03_15_165405_create_coupon_target_items_table',
                'batch' => 0,
            ),
            369 => 
            array (
                'id' => 378,
                'migration' => '2023_03_15_165405_create_coupons_table',
                'batch' => 0,
            ),
            370 => 
            array (
                'id' => 379,
                'migration' => '2023_03_15_165405_create_delivery_type_table',
                'batch' => 0,
            ),
            371 => 
            array (
                'id' => 380,
                'migration' => '2023_03_15_165405_create_failed_jobs_table',
                'batch' => 0,
            ),
            372 => 
            array (
                'id' => 381,
                'migration' => '2023_03_15_165405_create_filter_colors_table',
                'batch' => 0,
            ),
            373 => 
            array (
                'id' => 382,
                'migration' => '2023_03_15_165405_create_filter_tags_table',
                'batch' => 0,
            ),
            374 => 
            array (
                'id' => 383,
                'migration' => '2023_03_15_165405_create_images_table',
                'batch' => 0,
            ),
            375 => 
            array (
                'id' => 384,
                'migration' => '2023_03_15_165405_create_item_checks_table',
                'batch' => 0,
            ),
            376 => 
            array (
                'id' => 385,
                'migration' => '2023_03_15_165405_create_item_filter_colors_table',
                'batch' => 0,
            ),
            377 => 
            array (
                'id' => 386,
                'migration' => '2023_03_15_165405_create_item_images_table',
                'batch' => 0,
            ),
            378 => 
            array (
                'id' => 387,
                'migration' => '2023_03_15_165405_create_item_options_table',
                'batch' => 0,
            ),
            379 => 
            array (
                'id' => 388,
                'migration' => '2023_03_15_165405_create_item_recommends_table',
                'batch' => 0,
            ),
            380 => 
            array (
                'id' => 389,
                'migration' => '2023_03_15_165405_create_item_sizes_table',
                'batch' => 0,
            ),
            381 => 
            array (
                'id' => 390,
                'migration' => '2023_03_15_165405_create_item_variation_colors_table',
                'batch' => 0,
            ),
            382 => 
            array (
                'id' => 391,
                'migration' => '2023_03_15_165405_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            383 => 
            array (
                'id' => 392,
                'migration' => '2023_03_15_165405_create_items_table',
                'batch' => 0,
            ),
            384 => 
            array (
                'id' => 393,
                'migration' => '2023_03_15_165405_create_notice_icons_table',
                'batch' => 0,
            ),
            385 => 
            array (
                'id' => 394,
                'migration' => '2023_03_15_165405_create_notices_table',
                'batch' => 0,
            ),
            386 => 
            array (
                'id' => 395,
                'migration' => '2023_03_15_165405_create_password_resets_table',
                'batch' => 0,
            ),
            387 => 
            array (
                'id' => 396,
                'migration' => '2023_03_15_165405_create_payments_table',
                'batch' => 0,
            ),
            388 => 
            array (
                'id' => 397,
                'migration' => '2023_03_15_165405_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            389 => 
            array (
                'id' => 398,
                'migration' => '2023_03_15_165405_create_prefectures_table',
                'batch' => 0,
            ),
            390 => 
            array (
                'id' => 399,
                'migration' => '2023_03_15_165405_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            391 => 
            array (
                'id' => 400,
                'migration' => '2023_03_15_165405_create_sessions_table',
                'batch' => 0,
            ),
            392 => 
            array (
                'id' => 401,
                'migration' => '2023_03_15_165405_create_shops_table',
                'batch' => 0,
            ),
            393 => 
            array (
                'id' => 402,
                'migration' => '2023_03_15_165405_create_sub_categories_table',
                'batch' => 0,
            ),
            394 => 
            array (
                'id' => 403,
                'migration' => '2023_03_15_165405_create_tags_table',
                'batch' => 0,
            ),
            395 => 
            array (
                'id' => 404,
                'migration' => '2023_03_15_165405_create_top_banners_table',
                'batch' => 0,
            ),
            396 => 
            array (
                'id' => 405,
                'migration' => '2023_03_15_165405_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            397 => 
            array (
                'id' => 406,
                'migration' => '2023_03_15_165405_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            398 => 
            array (
                'id' => 407,
                'migration' => '2023_03_15_165405_create_user_payment_informations_table',
                'batch' => 0,
            ),
            399 => 
            array (
                'id' => 408,
                'migration' => '2023_03_15_165405_create_users_table',
                'batch' => 0,
            ),
            400 => 
            array (
                'id' => 409,
                'migration' => '2023_03_15_165406_add_foreign_keys_to_ads_table',
                'batch' => 0,
            ),
            401 => 
            array (
                'id' => 410,
                'migration' => '2023_03_15_165406_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            402 => 
            array (
                'id' => 411,
                'migration' => '2023_03_15_165406_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            403 => 
            array (
                'id' => 412,
                'migration' => '2023_03_15_165406_add_foreign_keys_to_coupons_table',
                'batch' => 0,
            ),
            404 => 
            array (
                'id' => 413,
                'migration' => '2023_03_15_165406_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            405 => 
            array (
                'id' => 414,
                'migration' => '2023_03_15_165406_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            406 => 
            array (
                'id' => 415,
                'migration' => '2023_03_15_165406_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            407 => 
            array (
                'id' => 416,
                'migration' => '2023_03_15_165406_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            408 => 
            array (
                'id' => 417,
                'migration' => '2023_03_15_165406_add_foreign_keys_to_top_banners_table',
                'batch' => 0,
            ),
            409 => 
            array (
                'id' => 418,
                'migration' => '2023_03_15_170118_create_admins_table',
                'batch' => 0,
            ),
            410 => 
            array (
                'id' => 419,
                'migration' => '2023_03_15_170118_create_ads_table',
                'batch' => 0,
            ),
            411 => 
            array (
                'id' => 420,
                'migration' => '2023_03_15_170118_create_brands_table',
                'batch' => 0,
            ),
            412 => 
            array (
                'id' => 421,
                'migration' => '2023_03_15_170118_create_categories_table',
                'batch' => 0,
            ),
            413 => 
            array (
                'id' => 422,
                'migration' => '2023_03_15_170118_create_coupon_target_items_table',
                'batch' => 0,
            ),
            414 => 
            array (
                'id' => 423,
                'migration' => '2023_03_15_170118_create_coupons_table',
                'batch' => 0,
            ),
            415 => 
            array (
                'id' => 424,
                'migration' => '2023_03_15_170118_create_delivery_type_table',
                'batch' => 0,
            ),
            416 => 
            array (
                'id' => 425,
                'migration' => '2023_03_15_170118_create_failed_jobs_table',
                'batch' => 0,
            ),
            417 => 
            array (
                'id' => 426,
                'migration' => '2023_03_15_170118_create_filter_colors_table',
                'batch' => 0,
            ),
            418 => 
            array (
                'id' => 427,
                'migration' => '2023_03_15_170118_create_filter_tags_table',
                'batch' => 0,
            ),
            419 => 
            array (
                'id' => 428,
                'migration' => '2023_03_15_170118_create_images_table',
                'batch' => 0,
            ),
            420 => 
            array (
                'id' => 429,
                'migration' => '2023_03_15_170118_create_item_checks_table',
                'batch' => 0,
            ),
            421 => 
            array (
                'id' => 430,
                'migration' => '2023_03_15_170118_create_item_filter_colors_table',
                'batch' => 0,
            ),
            422 => 
            array (
                'id' => 431,
                'migration' => '2023_03_15_170118_create_item_images_table',
                'batch' => 0,
            ),
            423 => 
            array (
                'id' => 432,
                'migration' => '2023_03_15_170118_create_item_options_table',
                'batch' => 0,
            ),
            424 => 
            array (
                'id' => 433,
                'migration' => '2023_03_15_170118_create_item_recommends_table',
                'batch' => 0,
            ),
            425 => 
            array (
                'id' => 434,
                'migration' => '2023_03_15_170118_create_item_sizes_table',
                'batch' => 0,
            ),
            426 => 
            array (
                'id' => 435,
                'migration' => '2023_03_15_170118_create_item_variation_colors_table',
                'batch' => 0,
            ),
            427 => 
            array (
                'id' => 436,
                'migration' => '2023_03_15_170118_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            428 => 
            array (
                'id' => 437,
                'migration' => '2023_03_15_170118_create_items_table',
                'batch' => 0,
            ),
            429 => 
            array (
                'id' => 438,
                'migration' => '2023_03_15_170118_create_notice_icons_table',
                'batch' => 0,
            ),
            430 => 
            array (
                'id' => 439,
                'migration' => '2023_03_15_170118_create_notices_table',
                'batch' => 0,
            ),
            431 => 
            array (
                'id' => 440,
                'migration' => '2023_03_15_170118_create_password_resets_table',
                'batch' => 0,
            ),
            432 => 
            array (
                'id' => 441,
                'migration' => '2023_03_15_170118_create_payments_table',
                'batch' => 0,
            ),
            433 => 
            array (
                'id' => 442,
                'migration' => '2023_03_15_170118_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            434 => 
            array (
                'id' => 443,
                'migration' => '2023_03_15_170118_create_prefectures_table',
                'batch' => 0,
            ),
            435 => 
            array (
                'id' => 444,
                'migration' => '2023_03_15_170118_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            436 => 
            array (
                'id' => 445,
                'migration' => '2023_03_15_170118_create_sessions_table',
                'batch' => 0,
            ),
            437 => 
            array (
                'id' => 446,
                'migration' => '2023_03_15_170118_create_shops_table',
                'batch' => 0,
            ),
            438 => 
            array (
                'id' => 447,
                'migration' => '2023_03_15_170118_create_sub_categories_table',
                'batch' => 0,
            ),
            439 => 
            array (
                'id' => 448,
                'migration' => '2023_03_15_170118_create_tags_table',
                'batch' => 0,
            ),
            440 => 
            array (
                'id' => 449,
                'migration' => '2023_03_15_170118_create_top_banners_table',
                'batch' => 0,
            ),
            441 => 
            array (
                'id' => 450,
                'migration' => '2023_03_15_170118_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            442 => 
            array (
                'id' => 451,
                'migration' => '2023_03_15_170118_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            443 => 
            array (
                'id' => 452,
                'migration' => '2023_03_15_170118_create_user_payment_informations_table',
                'batch' => 0,
            ),
            444 => 
            array (
                'id' => 453,
                'migration' => '2023_03_15_170118_create_users_table',
                'batch' => 0,
            ),
            445 => 
            array (
                'id' => 454,
                'migration' => '2023_03_15_170119_add_foreign_keys_to_ads_table',
                'batch' => 0,
            ),
            446 => 
            array (
                'id' => 455,
                'migration' => '2023_03_15_170119_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            447 => 
            array (
                'id' => 456,
                'migration' => '2023_03_15_170119_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            448 => 
            array (
                'id' => 457,
                'migration' => '2023_03_15_170119_add_foreign_keys_to_coupons_table',
                'batch' => 0,
            ),
            449 => 
            array (
                'id' => 458,
                'migration' => '2023_03_15_170119_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            450 => 
            array (
                'id' => 459,
                'migration' => '2023_03_15_170119_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            451 => 
            array (
                'id' => 460,
                'migration' => '2023_03_15_170119_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            452 => 
            array (
                'id' => 461,
                'migration' => '2023_03_15_170119_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            453 => 
            array (
                'id' => 462,
                'migration' => '2023_03_15_170119_add_foreign_keys_to_top_banners_table',
                'batch' => 0,
            ),
            454 => 
            array (
                'id' => 463,
                'migration' => '2023_03_15_170407_create_admins_table',
                'batch' => 0,
            ),
            455 => 
            array (
                'id' => 464,
                'migration' => '2023_03_15_170407_create_ads_table',
                'batch' => 0,
            ),
            456 => 
            array (
                'id' => 465,
                'migration' => '2023_03_15_170407_create_brands_table',
                'batch' => 0,
            ),
            457 => 
            array (
                'id' => 466,
                'migration' => '2023_03_15_170407_create_categories_table',
                'batch' => 0,
            ),
            458 => 
            array (
                'id' => 467,
                'migration' => '2023_03_15_170407_create_coupon_target_items_table',
                'batch' => 0,
            ),
            459 => 
            array (
                'id' => 468,
                'migration' => '2023_03_15_170407_create_coupons_table',
                'batch' => 0,
            ),
            460 => 
            array (
                'id' => 469,
                'migration' => '2023_03_15_170407_create_delivery_type_table',
                'batch' => 0,
            ),
            461 => 
            array (
                'id' => 470,
                'migration' => '2023_03_15_170407_create_failed_jobs_table',
                'batch' => 0,
            ),
            462 => 
            array (
                'id' => 471,
                'migration' => '2023_03_15_170407_create_filter_colors_table',
                'batch' => 0,
            ),
            463 => 
            array (
                'id' => 472,
                'migration' => '2023_03_15_170407_create_filter_tags_table',
                'batch' => 0,
            ),
            464 => 
            array (
                'id' => 473,
                'migration' => '2023_03_15_170407_create_images_table',
                'batch' => 0,
            ),
            465 => 
            array (
                'id' => 474,
                'migration' => '2023_03_15_170407_create_item_checks_table',
                'batch' => 0,
            ),
            466 => 
            array (
                'id' => 475,
                'migration' => '2023_03_15_170407_create_item_filter_colors_table',
                'batch' => 0,
            ),
            467 => 
            array (
                'id' => 476,
                'migration' => '2023_03_15_170407_create_item_images_table',
                'batch' => 0,
            ),
            468 => 
            array (
                'id' => 477,
                'migration' => '2023_03_15_170407_create_item_options_table',
                'batch' => 0,
            ),
            469 => 
            array (
                'id' => 478,
                'migration' => '2023_03_15_170407_create_item_recommends_table',
                'batch' => 0,
            ),
            470 => 
            array (
                'id' => 479,
                'migration' => '2023_03_15_170407_create_item_sizes_table',
                'batch' => 0,
            ),
            471 => 
            array (
                'id' => 480,
                'migration' => '2023_03_15_170407_create_item_variation_colors_table',
                'batch' => 0,
            ),
            472 => 
            array (
                'id' => 481,
                'migration' => '2023_03_15_170407_create_item_variation_sizes_table',
                'batch' => 0,
            ),
            473 => 
            array (
                'id' => 482,
                'migration' => '2023_03_15_170407_create_items_table',
                'batch' => 0,
            ),
            474 => 
            array (
                'id' => 483,
                'migration' => '2023_03_15_170407_create_notice_icons_table',
                'batch' => 0,
            ),
            475 => 
            array (
                'id' => 484,
                'migration' => '2023_03_15_170407_create_notices_table',
                'batch' => 0,
            ),
            476 => 
            array (
                'id' => 485,
                'migration' => '2023_03_15_170407_create_password_resets_table',
                'batch' => 0,
            ),
            477 => 
            array (
                'id' => 486,
                'migration' => '2023_03_15_170407_create_payments_table',
                'batch' => 0,
            ),
            478 => 
            array (
                'id' => 487,
                'migration' => '2023_03_15_170407_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            479 => 
            array (
                'id' => 488,
                'migration' => '2023_03_15_170407_create_prefectures_table',
                'batch' => 0,
            ),
            480 => 
            array (
                'id' => 489,
                'migration' => '2023_03_15_170407_create_purchase_limit_conditions_table',
                'batch' => 0,
            ),
            481 => 
            array (
                'id' => 490,
                'migration' => '2023_03_15_170407_create_sessions_table',
                'batch' => 0,
            ),
            482 => 
            array (
                'id' => 491,
                'migration' => '2023_03_15_170407_create_shops_table',
                'batch' => 0,
            ),
            483 => 
            array (
                'id' => 492,
                'migration' => '2023_03_15_170407_create_sub_categories_table',
                'batch' => 0,
            ),
            484 => 
            array (
                'id' => 493,
                'migration' => '2023_03_15_170407_create_tags_table',
                'batch' => 0,
            ),
            485 => 
            array (
                'id' => 494,
                'migration' => '2023_03_15_170407_create_top_banners_table',
                'batch' => 0,
            ),
            486 => 
            array (
                'id' => 495,
                'migration' => '2023_03_15_170407_create_user_delivery_informations_table',
                'batch' => 0,
            ),
            487 => 
            array (
                'id' => 496,
                'migration' => '2023_03_15_170407_create_user_invoice_informations_table',
                'batch' => 0,
            ),
            488 => 
            array (
                'id' => 497,
                'migration' => '2023_03_15_170407_create_user_payment_informations_table',
                'batch' => 0,
            ),
            489 => 
            array (
                'id' => 498,
                'migration' => '2023_03_15_170407_create_users_table',
                'batch' => 0,
            ),
            490 => 
            array (
                'id' => 499,
                'migration' => '2023_03_15_170408_add_foreign_keys_to_ads_table',
                'batch' => 0,
            ),
            491 => 
            array (
                'id' => 500,
                'migration' => '2023_03_15_170408_add_foreign_keys_to_brands_table',
                'batch' => 0,
            ),
            492 => 
            array (
                'id' => 501,
                'migration' => '2023_03_15_170408_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            493 => 
            array (
                'id' => 502,
                'migration' => '2023_03_15_170408_add_foreign_keys_to_coupons_table',
                'batch' => 0,
            ),
            494 => 
            array (
                'id' => 503,
                'migration' => '2023_03_15_170408_add_foreign_keys_to_item_images_table',
                'batch' => 0,
            ),
            495 => 
            array (
                'id' => 504,
                'migration' => '2023_03_15_170408_add_foreign_keys_to_items_table',
                'batch' => 0,
            ),
            496 => 
            array (
                'id' => 505,
                'migration' => '2023_03_15_170408_add_foreign_keys_to_shops_table',
                'batch' => 0,
            ),
            497 => 
            array (
                'id' => 506,
                'migration' => '2023_03_15_170408_add_foreign_keys_to_sub_categories_table',
                'batch' => 0,
            ),
            498 => 
            array (
                'id' => 507,
                'migration' => '2023_03_15_170408_add_foreign_keys_to_top_banners_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}