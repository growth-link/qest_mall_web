<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ShopDeliveryAreaSet
 * 
 * @property int $id
 * @property int|null $shop_delivery_area_id
 * @property int|null $prefecture_id
 * 
 * @property Prefecture|null $prefecture
 * @property ShopDeliveryArea|null $shop_delivery_area
 * @property Collection|ShopDeliveryCharge[] $shop_delivery_charges
 *
 * @package App\Models
 */
class ShopDeliveryAreaSet extends Model
{
	protected $table = 'shop_delivery_area_sets';
	public $timestamps = false;

	protected $casts = [
		'shop_delivery_area_id' => 'int',
		'prefecture_id' => 'int'
	];

	protected $fillable = [
		'shop_delivery_area_id',
		'prefecture_id'
	];

	public function prefecture()
	{
		return $this->belongsTo(Prefecture::class);
	}

	public function shop_delivery_area()
	{
		return $this->belongsTo(ShopDeliveryArea::class);
	}

	public function shop_delivery_charges()
	{
		return $this->hasMany(ShopDeliveryCharge::class);
	}
}
