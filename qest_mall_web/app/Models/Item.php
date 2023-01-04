<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
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
		'filter_tag_id' => 'int'
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
		'filter_tag_id'
	];
}
