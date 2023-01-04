<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoticeIconsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notice_icons')->delete();
        
        \DB::table('notice_icons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'メンテナンス',
                'icon_url' => '/images/icon_maintenance.png',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'お知らせ（注意）',
                'icon_url' => '/images/icon_warning.png',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'お知らせ（インフォメーション）',
                'icon_url' => '/images/icon_information.png',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'セキュリティ',
                'icon_url' => '/images/icon_security.png',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '重要',
                'icon_url' => '/images/icon_important.png',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => '災害情報',
                'icon_url' => '/images/icon_disaster.png',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => '配送遅延',
                'icon_url' => '/images/icon_delivery.png',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'クーポン',
                'icon_url' => '/images/icon_coupon.png',
            ),
        ));
        
        
    }
}