<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ShopDeliveryArea
 * 
 * @property int $id
 * @property string|null $area_name
 * @property int|null $shop_id
 * 
 * @property Shop|null $shop
 * @property Collection|ShopDeliveryAreaSet[] $shop_delivery_area_sets
 *
 * @package App\Models
 */
class ShopDeliveryArea extends Model
{
	protected $table = 'shop_delivery_areas';
	public $timestamps = false;

	protected $casts = [
		'shop_id' => 'int'
	];

	protected $fillable = [
		'area_name',
		'shop_id'
	];

	public function shop()
	{
		return $this->belongsTo(Shop::class);
	}

	public function shop_delivery_area_sets()
	{
		return $this->hasMany(ShopDeliveryAreaSet::class);
	}
}
