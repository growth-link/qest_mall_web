<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ShopDeliveryCharge
 * 
 * @property int $id
 * @property int|null $shop_id
 * @property int|null $shop_delivery_area_set_id
 * @property int|null $delivery_type_id
 * @property int|null $size_id
 * @property int|null $price
 * 
 * @property DeliveryType|null $delivery_type
 * @property ShopDeliveryAreaSet|null $shop_delivery_area_set
 * @property Shop|null $shop
 * @property Size|null $size
 *
 * @package App\Models
 */
class ShopDeliveryCharge extends Model
{
	protected $table = 'shop_delivery_charges';
	public $timestamps = false;

	protected $casts = [
		'shop_id' => 'int',
		'shop_delivery_area_set_id' => 'int',
		'delivery_type_id' => 'int',
		'size_id' => 'int',
		'price' => 'int'
	];

	protected $fillable = [
		'shop_id',
		'shop_delivery_area_set_id',
		'delivery_type_id',
		'size_id',
		'price'
	];

	public function delivery_type()
	{
		return $this->belongsTo(DeliveryType::class);
	}

	public function shop_delivery_area_set()
	{
		return $this->belongsTo(ShopDeliveryAreaSet::class);
	}

	public function shop()
	{
		return $this->belongsTo(Shop::class);
	}

	public function size()
	{
		return $this->belongsTo(Size::class);
	}
}
