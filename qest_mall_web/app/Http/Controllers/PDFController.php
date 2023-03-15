<?php

namespace App\Http\Controllers;

use PDF;

class PdfController extends Controller
{
    public function index()
    {
        // タイトル
        $title = 'ご利用明細書';

        // ヘッダ
        $issue_date = date("Y年n月j日");
        $order_number = '1-2208-00000000001';

        // 利用明細
        $payment_method = 'クレジットカード（VISA）';
        $purchase_date = '2022年8月30日';
        $shipping_date = '2022年9月1日';

        // 商品明細

        // 請求情報
        $subtotal = '7,100';
        $shipping_fee = '0';
        $used_points = '-1,000';
        $discount_amount = '100';
        $total_amount = '6,000';

        // ショップ情報
        $shop_name = 'LIBRE クエストモール店';
        $sales_person = '田中 太郎';
        $phone_number = '0123-45-6789';
        $address = '〒115-0001 東京都中央区銀座１−１−１銀座ビル２F';

        // 配送情報
        $delivery_method = 'ヤマト宅配便';
        $shipping_address = '〒261-7122 千葉県千葉市美浜区中瀬2-6-1　WBGマリブイースト22F';

        $data = [
            'title' => $title,
            'issue_date' => $issue_date,
            'order_number' => $order_number,
            'payment_method' => $payment_method,
            'purchase_date' => $purchase_date,
            'shipping_date' => $shipping_date,
            'subtotal' => $subtotal,
            'shipping_fee' => $shipping_fee,
            'discount_amount' => $discount_amount,
            'used_points' => $used_points,
            'total_amount' => $total_amount,
            'shop_name' => $shop_name,
            'sales_person' => $sales_person,
            'phone_number' => $phone_number,
            'address' => $address,
            'delivery_method' => $delivery_method,
            'shipping_address' => $shipping_address,
        ];

        $pdf = PDF::loadView('pdf.document', $data, [], 'utf-8');
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream();
    }
}
