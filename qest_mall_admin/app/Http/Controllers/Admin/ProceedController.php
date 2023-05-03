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


        return view("admin/proceed/histories", [
            //"statistics" => $statistics
            "headers" => $proceed_histories_header,
            "details" => $proceed_histories_detail
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