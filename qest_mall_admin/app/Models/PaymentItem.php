<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentItem
 * 
 * @property int $id
 * @property string|null $purchase_no
 * @property string|null $item_name
 * @property string|null $brand_name
 * @property string|null $color_name
 * @property string|null $size_name
 * @property int|null $price
 * @property int|null $shipping_cost
 *
 * @package App\Models
 */
class PaymentItem extends Model
{
	protected $table = 'payment_items';
	public $timestamps = false;

	protected $casts = [
		'price' => 'int',
		'shipping_cost' => 'int'
	];

	protected $fillable = [
		'purchase_no',
		'item_name',
		'brand_name',
		'color_name',
		'size_name',
		'price',
		'shipping_cost'
	];
}
