<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Prefecture
 * 
 * @property int $id
 * @property int|null $region_id
 * @property string|null $prefecture_name
 * @property string|null $prefecture_full_name
 * 
 * @property Collection|ShopDeliveryAreaSet[] $shop_delivery_area_sets
 * @property Collection|Shop[] $shops
 *
 * @package App\Models
 */
class Prefecture extends Model
{
	protected $table = 'prefectures';
	public $timestamps = false;

	protected $casts = [
		'region_id' => 'int'
	];

	protected $fillable = [
		'region_id',
		'prefecture_name',
		'prefecture_full_name'
	];

	public function shop_delivery_area_sets()
	{
		return $this->hasMany(ShopDeliveryAreaSet::class);
	}

	public function shops()
	{
		return $this->hasMany(Shop::class);
	}
}
