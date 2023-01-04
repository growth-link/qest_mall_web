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
        ));
        
        
    }
}