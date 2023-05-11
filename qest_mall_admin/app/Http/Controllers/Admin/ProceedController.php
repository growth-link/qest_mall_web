<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

use App\Models\ProceedHistoriesHeader;
use App\Models\ProceedHistoriesDetail;

use App\Models\Shop;

use League\Csv\Writer;
//use phpseclib\Net\SFTP;

class ProceedController extends Controller
{
    // 統計情報
    public function proceedStatistics(Request $request) {
        $shop_id = $request->query('shop_id');
        if($shop_id != null) {
            $shop = Shop::query()
                        ->where("id", $shop_id)
                        ->first();
            if($shop) {
                $request->session()->put('shop', $shop);
                $request->session()->put('account_type', 1);
            }
        }

        $request->session()->put('is_mall', true);
        $company_id = $request->session()->get("company_id");

        $shops = Shop::query()->get();
        $request->session()->put('shops', $shops);

        return view("admin/proceed/statistics");
    }

    // 会計履歴
    public function proceedHistories(Request $request) {
        $shop_id = $request->query('shop_id');
        if($shop_id != null) {
            $shop = Shop::query()
                        ->where("id", $shop_id)
                        ->first();
            if($shop) {
                $request->session()->put('shop', $shop);
                $request->session()->put('account_type', 1);
            }
        }

        //$statistics = Statistic::get();
        $proceed_histories_header = ProceedHistoriesHeader::get();
        $details1 = ProceedHistoriesDetail::where("order_no", "1-2305-00000000001")->get();
        $details2 = ProceedHistoriesDetail::where("order_no", "1-2305-00000000002")->get();
        $details3 = ProceedHistoriesDetail::where("order_no", "1-2305-00000000003")->get();
        $details4 = ProceedHistoriesDetail::where("order_no", "1-2305-00000000004")->get();
        $details5 = ProceedHistoriesDetail::where("order_no", "1-2305-00000000005")->get();
        $details6 = ProceedHistoriesDetail::where("order_no", "1-2305-00000000006")->get();
        $details7 = ProceedHistoriesDetail::where("order_no", "1-2305-00000000007")->get();
        $details8 = ProceedHistoriesDetail::where("order_no", "1-2305-00000000008")->get();

        $month1 = ProceedHistoriesDetail::where("order_no", "1")->get();
        $month2 = ProceedHistoriesDetail::where("order_no", "2")->get();
        $month3 = ProceedHistoriesDetail::where("order_no", "3")->get();

        $colors = [
            "#6FC538", // 売上
            "#62ADC4", // 決済
            "#F2A91F", // ポイント
            "#F2A91F", //クーポン
            "#f2f2f2", // 月次手数料
            "#FF7790", // 手数料
            "#A06EBF" // その他
        ];

        $tags = [
            "売上",
            "決済",
            "ポイント",
            "クーポン",
            "月次手数料",
            "手数料",
            "その他"
        ];

        $tax_type = [
            "10%",
            "8%",
            "非課税"
        ];

        $subject_type = array(
            "商品代金（10%）",
            "商品代金（8%）",
            "配送料",
            "ラッピング放送代",
            "その他（10%）",
            "消費税額（10%）",
            "消費税額（8%）",
            "イオンカード決済",
            "一般カード決済",
            "販売営業料", // 9
            "システム利用料", // 10
            "販促費", // 11
            "イオンカード手数料", // 12
            "その他クレジットカード手数料" // 13
        );


        return view("admin/proceed/histories", [
            //"statistics" => $statistics
            "headers" => $proceed_histories_header,
            "details1" => $details1,
            "details2" => $details2,
            "details3" => $details3,
            "details4" => $details4,
            "details5" => $details5,
            "details6" => $details6,
            "details7" => $details7,
            "details8" => $details8,
            "colors" => $colors,
            "subject_type" => $subject_type,
            "tax_type" => $tax_type,
            "tags" => $tags
        ]);
    }

    // 月別精算明細
    public function proceedMonthly(Request $request) {
        return view("admin/proceed/monthly");
    }

    // CSV作成とアップロード
    public function uploadCsv(Request $request)
    {
        // CSVファイルの内容を作成
        $csvData = [
            ['id', 'name', 'email'],
            [1, 'John', 'john@example.com'],
            [2, 'Jane', 'jane@example.com'],
            [3, 'Bob', 'bob@example.com'],
        ];

        // CSVファイルを作成
        $csvWriter = Writer::createFromString('');
        $csvWriter->insertAll($csvData);
        $csvContent = $csvWriter->getContent();

        \Log::Info($csvContent);
        \Storage::disk('sftp')->put('qest_mall/test.csv', $csvContent);

        return response('CSV file uploaded');
    }
}