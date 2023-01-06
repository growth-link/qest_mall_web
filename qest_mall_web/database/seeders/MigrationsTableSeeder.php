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
        ));
        
        
    }
}