<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecifiedCommercialTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specified_commercial_transactions')->delete();
        
        \DB::table('specified_commercial_transactions')->insert(array (
            0 => 
            array (
                'shop_id' => 1,
                'product_delivery_schedule' => '（例）原則配送のご依頼を受けてから48時間以内に発送いたします。週末をはさむ場合、週明け以降の発送となることがございます。お届けのご希望に添えない可能性がございます。その場合メールまたはお電話でお知らせいたします。予めご了承ください。',
                'payment_method_and_deadline' => '（例）クレジットカード決済、コンビニ決済、銀行振込、キャリア決済がご利用頂けます。
クレジットカード決済、キャリア決済：商品注文時点でお支払いが確定いたします。
コンビニ決済、銀行振込み：商品注文時点から約3日間の期限以内にお支払いをお願いいたします。
支払い期限を過ぎると自動でキャンセルとなります。',
            ),
        ));
        
        
    }
}