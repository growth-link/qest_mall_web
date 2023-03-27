<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 *
 * @property int $id
 * @property int|null $shop_id
 * @property string|null $jan_code
 * @property int|null $brand_id
 * @property int|null $category_id
 * @property int|null $sub_category_id
 * @property string|null $name
 * @property string|null $detail_title
 * @property string|null $detail
 * @property string|null $information
 * @property string|null $item_no
 * @property string|null $model_no
 * @property bool|null $is_maker_request_price
 * @property int|null $open_price
 * @property int|null $normal_price
 * @property int|null $tax
 * @property Carbon|null $start_datetime
 * @property Carbon|null $end_datetime
 * @property bool|null $can_reserve
 * @property Carbon|null $reserve_start_datetime
 * @property bool|null $is_postage_free
 * @property int|null $delivery_type_id
 * @property int|null $item_size_id
 * @property bool|null $is_consolidate_exclude
 * @property bool|null $is_purchase_limit
 * @property int|null $purchase_limit_condition_id
 * @property int|null $purchase_limit
 * @property bool|null $has_youtube
 * @property string|null $youtube_tag
 * @property bool|null $has_color
 * @property bool|null $has_size
 * @property bool|null $has_option
 * @property bool|null $has_check
 * @property string|null $one_stories_url
 * @property int|null $filter_color_id
 * @property int|null $filter_tag_id
 * @property int $stock
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Brand|null $brand
 * @property Category|null $category
 * @property Shop|null $shop
 * @property Collection|ItemImage[] $item_images
 *
 * @package App\Models
 */
class Item extends Model
{
	use SoftDeletes;
	protected $table = 'items';

	protected $casts = [
		'shop_id' => 'int',
		'brand_id' => 'int',
		'category_id' => 'int',
		'sub_category_id' => 'int',
		'is_maker_request_price' => 'bool',
		'open_price' => 'int',
		'normal_price' => 'int',
		'tax' => 'int',
		'can_reserve' => 'bool',
		'is_postage_free' => 'bool',
		'delivery_type_id' => 'int',
		'item_size_id' => 'int',
		'is_consolidate_exclude' => 'bool',
		'is_purchase_limit' => 'bool',
		'purchase_limit_condition_id' => 'int',
		'purchase_limit' => 'int',
		'has_youtube' => 'bool',
		'has_color' => 'bool',
		'has_size' => 'bool',
		'has_option' => 'bool',
		'has_check' => 'bool',
		'filter_color_id' => 'int',
		'filter_tag_id' => 'int',
		'stock' => 'int'
	];

	protected $dates = [
		'start_datetime',
		'end_datetime',
		'reserve_start_datetime'
	];

	protected $fillable = [
		'shop_id',
		'jan_code',
		'brand_id',
		'category_id',
		'sub_category_id',
		'name',
		'detail_title',
		'detail',
		'information',
		'item_no',
		'model_no',
		'is_maker_request_price',
		'open_price',
		'normal_price',
		'tax',
		'start_datetime',
		'end_datetime',
		'can_reserve',
		'reserve_start_datetime',
		'is_postage_free',
		'delivery_type_id',
		'item_size_id',
		'is_consolidate_exclude',
		'is_purchase_limit',
		'purchase_limit_condition_id',
		'purchase_limit',
		'has_youtube',
		'youtube_tag',
		'has_color',
		'has_size',
		'has_option',
		'has_check',
		'one_stories_url',
		'filter_color_id',
		'filter_tag_id',
		'stock'
	];

	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function shop()
	{
		return $this->belongsTo(Shop::class);
	}

	public function item_images()
	{
		return $this->hasMany(ItemImage::class);
	}

	public function is_sumbnail_image()
	{
		return $this->hasOne(ItemImage::class)->where('is_sumbnail', true);
	}

    // 並べ替え
    public function scopeSortItem($query, $sort){
        if(isset($sort)) {
            if($sort=='recommend'){
                $query;
            }
            if($sort=='low_price'){
                $query->orderBy('normal_price');
            }
            if($sort=='high_price'){
                $query->orderBy('normal_price', 'desc');
            }
            if($sort=='start_datetime'){
                $query->orderBy('start_datetime');
            }
        }
        return $query;
    }

    // キーワード検索（$condition='NOT LIKE'で除外キーワード検索）
    public function scopeSearchKeyword($query, $keyword, $condition='LIKE'){
        if(isset($keyword)){
            // 複数キーワード検索
            $space_conversion = mb_convert_kana($keyword, 's'); // 全角スペースを半角に変換
            $word_array_searched = preg_split('/[\s,]+/', $space_conversion, -1, PREG_SPLIT_NO_EMPTY); // 単語を半角スペースで区切って配列に

            if($condition == 'LIKE'){
                $query->leftJoin('shops','items.shop_id','=','shops.id')
                ->leftJoin('brands','items.brand_id','=','brands.id');

                $columns = ['shop_name','brand_name','name','detail_title','detail']; //検索項目

                foreach($columns as $column) {
                    $query->orWhere(function($query) use($word_array_searched,$column,$condition){
                        foreach($word_array_searched as $value) {
                            $query->where($column,$condition,'%'.$value.'%');
                        }
                    });
                }

            } else {
                // NOT LIKE検索を行うのはnameのみとする
                foreach($word_array_searched as $value) {
                    $query->where('name',$condition,'%'.$value.'%');
                }
            }

        }
        return $query;
    }

    // フラグカテゴリ検索
    public function scopeSearchFlagCategory($query, $id){
        if(isset($id)){
            $query->leftJoin('sub_categories','items.sub_category_id','=','sub_categories.id')
                ->whereIn('sub_categories.id', explode(',', $id));
        }
        return $query;
    }

    // カテゴリ検索（PC版）
    public function scopeSearchCategoryHP($query, $id){
        if(isset($id)){
            // ファッションカテゴリ（小項目）のリストを配列で取得
            $fashion_minor_categories = Category::where('fashion_minor_category_flag', true)
                ->pluck('id')->toArray();

            $search_ids = collect(); //検索用配列初期化
            $ids = explode(',', $id);
            $search_ids->push($ids); //検索用配列にrequestデータ格納

            foreach($ids as $value){
                // ファッションカテゴリ（小項目）の場合
                if(array_search($value, $fashion_minor_categories)){
                    // 最下層のidを取得して検索用配列に追加
                    $quaternary_ids = Category::find($value)->categories->pluck('id')->toArray();
                    $search_ids->push($quaternary_ids);
                }
            }

            $query->leftJoin('categories','items.category_id','=','categories.id')
                ->whereIn('categories.id', $search_ids->collapse());
        }
        return $query;
    }

    // カテゴリ検索（SP版）
    public function scopeSearchCategorySP($query, $id, $category){
        if(isset($id)){
            $query->leftJoin('categories','items.category_id','=','categories.id');

            $ids = collect();
            $search_ids = collect();

            // major_categoryの場合
            if($category->parent_id === null){
                $middle_categories = $category->categories;
                foreach($middle_categories as $middle_category){
                    if($middle_category->categories->first()->categories->count() == 0){
                        // 最下層が小項目までの場合
                        $ids->push($middle_category->categories->pluck('id'));
                    } else {
                        // 最下層が細項目までの場合
                        foreach($middle_category->categories as $minor_category){
                            $ids->push($minor_category->categories->pluck('id'));
                        }
                    }
                }
                $search_ids = $ids->collapse();
            } else {
                // 子カテゴリがある場合
                if($category->categories->count() > 0){
                    if($category->categories->first()->categories->count() > 0){
                        // 子カテゴリが最下層ではない場合
                        foreach($category->categories as $minor_category){
                            $ids->push($minor_category->categories->pluck('id'));
                        }
                        $search_ids = $ids->collapse();
                    } else {
                        // 子カテゴリが最下層の場合
                        $search_ids = $category->categories->pluck('id');
                    }
                } else {
                    // 最下層カテゴリの場合
                    $search_ids->push($id);
                }
            }
            $query->whereIn('categories.id',$search_ids);
        }
        return $query;
    }

    // ブランド検索
    public function scopeSearchBrand($query, $id){
        return $query->leftJoin('brands','items.brand_id','=','brands.id')
                    ->where('brands.id', $id);
    }

    // ショップ検索
    public function scopeSearchShop($query, $id){
        return $query->leftJoin('shops','items.shop_id','=','shops.id')
                    ->where('shops.id', $id);
    }

    // タグ検索
    public function scopeSearchTag($query, $id){
        if(isset($id)){
            $query->leftJoin('tags','items.filter_tag_id','=','tags.id')
                ->whereIn('tags.id', explode(',', $id));
        }
        return $query;
    }

    // 価格帯（最小値）検索
    public function scopeSearchStartPrice($query, $start_price){
        if(isset($start_price)){
            $query->where('normal_price', '>=', $start_price);
        }
        return $query;
    }

    // 価格帯（最大値）検索
    public function scopeSearchEndPrice($query, $end_price){
        if(isset($end_price)){
            $query->where('normal_price', '<=', $end_price);
        }
        return $query;
    }

    // 送料無料検索
    public function scopeSearchIsPostageFree($query, $is_postage_free){
        if(isset($is_postage_free)){
            $query->where('is_postage_free', true);
        }
        return $query;
    }

    // クーポン対象検索
    public function scopeSearchIsCoupon($query, $is_coupon){
        if(isset($is_coupon)){
            $query->join('coupon_target_items','items.id','=','coupon_target_items.item_id')
                ->where('coupon_target_items.deleted_at', null);
        }
        return $query;
    }

    // 在庫なしを含む検索
    public function scopeSearchIncludingOutOfStock($query, $including_out_of_stock){
        if(isset($including_out_of_stock)){
            $query->where('stock', '>=', 0);
        } else {
            $query->where('stock', '>', 0);
        }
        return $query;
    }

    // ショップ・ブランド検索（部分一致）
    public function scopeSearchBrandShopPartialMatch($query, $keyword){
        if(isset($keyword)){
            $query->leftJoin('shops','items.shop_id','=','shops.id')
            ->leftJoin('brands','items.brand_id','=','brands.id')
            ->orWhere('shop_name','LIKE','%'.$keyword.'%')
            ->orWhere('brand_name','LIKE','%'.$keyword.'%');
        }
        return $query;
    }
}
