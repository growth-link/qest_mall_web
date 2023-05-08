<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DeliveryType
 * 
 * @property int $id
 * @property string|null $delivery_type_name
 * 
 * @property Collection|ShopDeliveryCharge[] $shop_delivery_charges
 *
 * @package App\Models
 */
class DeliveryType extends Model
{
	protected $table = 'delivery_type';
	public $timestamps = false;

	protected $fillable = [
		'delivery_type_name'
	];

	public function shop_delivery_charges()
	{
		return $this->hasMany(ShopDeliveryCharge::class);
	}
}
