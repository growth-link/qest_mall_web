<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Item;

class ItemController extends Controller
{
    // 出品商品一覧
    public function items() {
        return view("admin/item-info/items");
    }

    // 新規商品登録
    public function itemsCreate(Request $request) {
        $item = null;
        if($request->has('item_id')) {
            $item = Item::where('id', $request->item_id)->first();
        }
        

        return view("admin/item-info/items_create", [
            "item" => $item
        ]);
    }

    // 商品登録
    public function create(Request $request) {
        $item = new Item();
        $item->name = "test";
        $item->save();

        return redirect()->route('admin.item.create');
    }
}
