<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

use App\Models\ProceedHistoriesHeader;
use App\Models\ProceedHistoriesDetail;

use League\Csv\Writer;
//use phpseclib\Net\SFTP;

class ProceedController extends Controller
{
    // 統計情報
    public function proceedStatistics(Request $request) {
        return view("admin/proceed/statistics");
    }

    // 会計履歴
    public function proceedHistories(Request $request) {
        //$statistics = Statistic::get();
        $proceed_histories_header = ProceedHistoriesHeader::get();
        $proceed_histories_detail = ProceedHistoriesDetail::get();

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
        );


        return view("admin/proceed/histories", [
            //"statistics" => $statistics
            "headers" => $proceed_histories_header,
            "details" => $proceed_histories_detail,
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