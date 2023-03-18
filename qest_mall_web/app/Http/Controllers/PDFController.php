<?php

namespace App\Http\Controllers;

use PDF;

class PdfController extends Controller
{
    // ご利用明細書作成
    // TODO: DBへの繋ぎ込み必要
    public function createStatement()
    {
        // タイトル
        $title = 'ご利用明細書';

        $orderNumber = '1-2208-00000000001';// 注文番号

        // ヘッダ
        $header = [
            'issue_date' => date("Y年n月j日"),
            'order_number' => $orderNumber,
        ];

        // 利用明細
        $details = [
            'order_number' => $orderNumber,
            'payment_method' => 'クレジットカード（VISA）',
            'purchase_date' => '2022年8月30日',
            'shipping_date' => '2022年9月1日',
        ];

        // 商品明細
        $items = [
            [
                'id' => 3,
                'name' => '天然水ミネラルウォーター 500ml 1セット(6本)',
                'quantity' => 2,
                'price' => 1100,
                'tax_rate' => 0.08,
                'subtotal' => 1100 * 2,
            ],
            [
                'id' => 4,
                'name' => 'コットンベース Tシャツ',
                'quantity' => 1,
                'price' => 4900,
                'tax_rate' => 0.10,
                'subtotal' => 4900 * 1,
            ],
        ];

        // 返品商品明細
        $returned_items = [
            [
                'id' => 3,
                'name' => '返品：天然水ミネラルウォーター 500ml 1セット(6本)',
                'quantity' => 1,
                'price' => 1100,
                'tax_rate' => 0.08,
                'subtotal' => -1 * 1100 * 1,
            ],
        ];
        $is_returned = count($returned_items) > 0;

        // 商品明細(結合)
        $merged_items = array_merge($items, $returned_items);
        array_multisort(array_column($merged_items, 'id'), SORT_ASC, $merged_items);

        // 請求情報作成(消費税が8%, 10%どちらも存在するか確認)
        $subtotal = 0;
        $subtotal_8per = 0;
        $subtotal_10per = 0;
        foreach ($items as $item) {
            $subtotal += $item['subtotal'];
            if ($item['tax_rate'] == 0.08) {
                $subtotal_8per += $item['subtotal'];
            } elseif ($item['tax_rate'] == 0.10) {
                $subtotal_10per += $item['subtotal'];
            }
        }
        $shipping_fee = 0;
        $discount_amount = 1000;
        $used_points = 100;
        $total_amount = $subtotal + $shipping_fee - $discount_amount - $used_points;
        $invoice = [
            'subtotal' => $subtotal,
            'shipping_fee' => $shipping_fee,
            'discount_amount' => $discount_amount,
            'used_points' => $used_points,
            'total_amount' => $total_amount,
        ];

        // 返品対応情報作成
        if ($is_returned) {
            $returned_subtotal = array_reduce($returned_items, function ($carry, $item) {
                    return $carry + $item['subtotal'];
                }, 0);

            foreach ($returned_items as $item) {
                if ($item['tax_rate'] == 0.08) {
                    $subtotal_8per += $item['subtotal'];
                } elseif ($item['tax_rate'] == 0.10) {
                    $subtotal_10per += $item['subtotal'];
                }
            }

            $returned_shipping_fee = 0;
            $returned_discount_amount = 0;
            $returned_used_points = 0;
            $returned_total_amount = $total_amount + $returned_subtotal + $returned_shipping_fee - $returned_discount_amount - $returned_used_points;
        } else {
            $returned_subtotal = 0;
            $returned_shipping_fee = 0;
            $returned_discount_amount = 0;
            $returned_used_points = 0;
            $returned_total_amount = 0;
        }
        $returned = [
            'is_returned' => $is_returned,
            'subtotal' => $returned_subtotal,
            'shipping_fee' => $returned_shipping_fee,
            'discount_amount' => $returned_discount_amount,
            'used_points' => $returned_used_points,
            'total_amount' => $returned_total_amount,
        ];

        // TODO: ここで按分処理を行う(共通メソッド完成後に入れる)

        $subtotal_with_tax = [
            '8per' => $subtotal_8per,
            '10per' => $subtotal_10per,
        ];


        // ショップ情報
        $shop_info = [
            'shop_name' => 'LIBRE クエストモール店',
            'sales_person' => '田中 太郎',
            'phone_number' => '0123-45-6789',
            'address' => '〒115-0001 東京都中央区銀座１−１−１銀座ビル２F',
        ];

        // 配送情報
        $delivery_info = [
            'delivery_method' => 'ヤマト宅配便',
            'shipping_address' => '〒261-7122 千葉県千葉市美浜区中瀬2-6-1　WBGマリブイースト22F',
        ];

        $data = [
            'title' => $title,
            'header' => $header,
            'details' => $details,
            'items' => $merged_items,
            'invoice' => $invoice,
            'returned' => $returned,
            'subtotal_with_tax' => $subtotal_with_tax,
            'shop_info' => $shop_info,
            'delivery_info' => $delivery_info,
        ];

        $pdf = PDF::loadView('pdf.statement', $data, [], 'utf-8');
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream();
    }

    // ご利用明細書（返品対応）作成
    // TODO: DBへの繋ぎ込み必要
    public function createPaymentStatement()
    {
        // タイトル
        $title = '支払明細書';

        // ヘッダ
        $header = [
            'issue_date' => date("Y年n月j日"),
            'order_number' => '6943692569473895',
        ];

        // ショップ情報
        $shop =[
            'company_name' => '株式会社○○○○○○',
            'shop_name' => 'ショップ名',
        ];

        // OPA会社情報
        // TODO: 連絡先聞く、電子印もらう
        $opa = [
            'company_name' => '株式会社OPA',
            'zip_code' => '〒261-7122',
            'address' => '千葉県千葉市美浜区中瀬2-6-1',
            'apartment_name' => 'WBGマリブイースト22F',
            'phone_number' => '0123456789',
        ];

        // 売上高
        $product_price_10_percent = 500000;  // 商品代金(10%)
        $product_price_8_percent = 300000;   // 商品代金(8%)
        $shipping_fee = 28370;              // 配送料
        $wrapping_packaging_fee = 1500;    // ラッピング包装代
        $options_fee = 2000;               // オプション

        // 配送料、ラッピング包装代、オプションは消費税を分割しておく
        $shipping_fee_ex_tax = $shipping_fee / 1.1;
        $tax_shipping_fee = $shipping_fee - $shipping_fee_ex_tax;
        $wrapping_packaging_fee_ex_tax = $wrapping_packaging_fee / 1.1;
        $tax_wrapping_packaging_fee = $wrapping_packaging_fee - $wrapping_packaging_fee_ex_tax;
        $options_fee_ex_tax = $options_fee / 1.1;
        $tax_options_fee = $options_fee - $options_fee_ex_tax;

        // 小計
        $subtotal = $product_price_10_percent + $product_price_8_percent + $shipping_fee_ex_tax + $wrapping_packaging_fee_ex_tax + $options_fee_ex_tax;

        // 消費税額(10%)
        $tax_amount_10_percent = $product_price_10_percent * 0.1 + $tax_shipping_fee + $tax_wrapping_packaging_fee + $tax_options_fee;

        // 消費税額(8%)
        $tax_amount_8_percent = $product_price_8_percent * 0.08;

        // 合計
        $total_amount = $subtotal + $tax_amount_10_percent + $tax_amount_8_percent;
        $sales = [
            'product_price_10_percent' => $product_price_10_percent,
            'product_price_8_percent' => $product_price_8_percent,
            'shipping_fee' => $shipping_fee_ex_tax,
            'wrapping_packaging_fee' => $wrapping_packaging_fee_ex_tax,
            'options_fee' => $options_fee_ex_tax,
            'subtotal' => $subtotal,
            'tax_amount_10_percent' => $tax_amount_10_percent,
            'tax_amount_8_percent' => $tax_amount_8_percent,
            'total' => $total_amount,
        ];

        // 手数料
        // TODO: 手数料の%が変わるのでショップ毎で計算ロジック必要？
        $sales_commission = 99404;  // 販売営業料
        $system_fee = 8284; // システム手数料
        $promotion_cost = 16567;    // 販促費
        $ion_card_fee = 432;    // イオンカード手数料
        $other_credit_card_fee = 7688;  // その他クレジットカード手数料
        $point_fee = 9050;  // WAONPOINT手数料
        $coupon_cost = 0;   // クーポン負担金
        $event_point_cost = 0;  // イベント用WAONPOINT負担金
        $other_promotion_cost = 100000;  // その他販促協力金

        // 小計
        $commission_subtotal = $sales_commission + $system_fee + $promotion_cost + $ion_card_fee + $other_credit_card_fee + $point_fee + $coupon_cost + $event_point_cost + $other_promotion_cost;

        // 消費税
        $commission_tax = $commission_subtotal * 0.1;

        // 合計
        $commission_total = $commission_subtotal + $commission_tax;

        $commission = [
            'sales_commission' => $sales_commission,
            'system_fee' => $system_fee,
            'promotion_cost' => $promotion_cost,
            'ion_card_fee' => $ion_card_fee,
            'other_credit_card_fee' => $other_credit_card_fee,
            'point_fee' => $point_fee,
            'coupon_cost' => $coupon_cost,
            'event_point_cost' => $event_point_cost,
            'other_promotion_cost' => $other_promotion_cost,
            'subtotal' => $commission_subtotal,
            'tax' => $commission_tax,
            'total' => $commission_total,
        ];

        // 決済種別内訳
        $aeon_card_payment_amount = 502360;  // イオンカード決済金額
        $other_card_payment_amount = 200500; // その他カード決済金額
        $point_usage_amount = 10800;        // WAONポイント利用金額
        $coupon_usage_amount = 192210;       // クーポン

        // 合計
        $payment_type_total = $aeon_card_payment_amount + $other_card_payment_amount + $point_usage_amount + $coupon_usage_amount;
        $payment_type = [
            'aeon_card' => $aeon_card_payment_amount,
            'other_card' => $other_card_payment_amount,
            'point' => $point_usage_amount,
            'coupon' => $coupon_usage_amount,
            'total' => $payment_type_total,
        ];

        // お支払い金額
        $total_payment_amount = $total_amount + $commission_total;  // お支払い金額
        $total = [
            'sales' => $total_amount,
            'commission' => $commission_total,
            'payment_amount' => $total_payment_amount,
        ];

        $data = [
            'title' => $title,
            'header' => $header,
            'shop' => $shop,
            'opa' => $opa,
            'sales' => $sales,
            'commission' => $commission,
            'payment_type' => $payment_type,
            'total' => $total,
        ];

        $pdf = PDF::loadView('pdf.payment-statement', $data, [], 'utf-8');
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream();
    }
}
