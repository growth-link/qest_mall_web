<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $id
 * @property string|null $purchase_no
 * @property string|null $voucher_id
 * @property int|null $delivery_post_code
 * @property string|null $delivery_address_1
 * @property string|null $delivery_first_name
 * @property string|null $delivery_last_name
 * @property string|null $delivery_first_name_kana
 * @property string|null $delivery_last_name_kana
 * @property int|null $shipping_cost
 * @property int|null $credit_card
 * @property int|null $waon_point
 * @property int|null $get_point
 * @property int|null $coupon_id
 * @property int|null $coupon_price
 * @property string|null $memo
 * @property int|null $user_id
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';
	public $timestamps = false;

	protected $casts = [
		'delivery_post_code' => 'int',
		'shipping_cost' => 'int',
		'credit_card' => 'int',
		'waon_point' => 'int',
		'get_point' => 'int',
		'coupon_id' => 'int',
		'coupon_price' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'purchase_no',
		'voucher_id',
		'delivery_post_code',
		'delivery_address_1',
		'delivery_first_name',
		'delivery_last_name',
		'delivery_first_name_kana',
		'delivery_last_name_kana',
		'shipping_cost',
		'credit_card',
		'waon_point',
		'get_point',
		'coupon_id',
		'coupon_price',
		'memo',
		'user_id'
	];
}
