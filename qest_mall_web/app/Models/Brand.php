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
 * Class Brand
 *
 * @property int $brand_id
 * @property string|null $brand_name
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
class Brand extends Model
{
	use SoftDeletes;
	protected $table = 'brands';
	protected $primaryKey = 'brand_id';

	protected $casts = [
		'visibility_status' => 'int',
		'image_id' => 'int'
	];

	protected $fillable = [
		'brand_name',
		'visibility_status',
		'image_id'
	];

	public function image()
	{
		return $this->belongsTo(Image::class, 'image_id');
	}

	public function items()
	{
		return $this->hasMany(Item::class);
	}
}
