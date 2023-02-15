<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Shop
 * 
 * @property int $id
 * @property string|null $shop_name
 * @property string|null $shop_tt_code
 * @property int|null $visibility_status
 * @property int|null $image_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Image|null $image
 * @property Collection|Item[] $items
 *
 * @package App\Models
 */
class Shop extends Model
{
	use SoftDeletes;
	protected $table = 'shops';

	protected $casts = [
		'visibility_status' => 'int',
		'image_id' => 'int'
	];

	protected $fillable = [
		'shop_name',
		'shop_tt_code',
		'visibility_status',
		'image_id'
	];

	public function image()
	{
		return $this->belongsTo(Image::class);
	}

	public function items()
	{
		return $this->hasMany(Item::class);
	}
}
