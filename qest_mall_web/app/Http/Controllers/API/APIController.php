<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;

class APIController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | テスト用API
    |--------------------------------------------------------------------------
    */

    // 単体取得
    public function getTest($id) {
        if (Test::where('id', $id)->exists()) {
            $test = Test::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($test, 200);
        } else {
            return response()->json([
              "message" => "Test not found"
            ], 404);
        }
    }

    // 複数取得
    public function getListTest() {
        // logic to get a student record goes here
        // $students = Student::get()->toJson(JSON_PRETTY_PRINT);
        // return response($students, 200);
        return response()->json(["testaaaa" => "testreasdfasfd"]);
    }

    // 追加
    public function addTest(Request $request) {
        $test = new Test;
        $test->name = $request->name;
        $test->save();
    
        return response()->json([
            "message" => "student record created"
        ], 201);
    }
    
    // 更新
    public function updateTest(Request $request) {
        $test = Test::where('id', $request->id)
            ->update(['name' => $request->name]);
    
        return response()->json([
            "message" => "update success"
        ], 201);
    }
    
    // 削除
    public function deleteTest ($id) {
        Test::where('id', $id)->delete();

        return response()->json([
            "message" => "delete success"
        ], 201);
    }
}
