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
                'icon_url' => '/images/icon_maintenance.png',
                'id' => 1,
                'title' => 'メンテナンス',
            ),
            1 => 
            array (
                'icon_url' => '/images/icon_warning.png',
                'id' => 2,
                'title' => 'お知らせ（注意）',
            ),
            2 => 
            array (
                'icon_url' => '/images/icon_information.png',
                'id' => 3,
                'title' => 'お知らせ（インフォメーション）',
            ),
            3 => 
            array (
                'icon_url' => '/images/icon_security.png',
                'id' => 4,
                'title' => 'セキュリティ',
            ),
            4 => 
            array (
                'icon_url' => '/images/icon_important.png',
                'id' => 5,
                'title' => '重要',
            ),
            5 => 
            array (
                'icon_url' => '/images/icon_disaster.png',
                'id' => 6,
                'title' => '災害情報',
            ),
            6 => 
            array (
                'icon_url' => '/images/icon_delivery.png',
                'id' => 7,
                'title' => '配送遅延',
            ),
            7 => 
            array (
                'icon_url' => '/images/icon_coupon.png',
                'id' => 8,
                'title' => 'クーポン',
            ),
        ));
        
        
    }
}