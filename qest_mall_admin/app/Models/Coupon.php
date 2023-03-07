<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coupon
 * 
 * @property int $id
 * @property string|null $url
 * @property int|null $image_id
 * 
 * @property Image|null $image
 *
 * @package App\Models
 */
class Coupon extends Model
{
	protected $table = 'coupons';
	public $timestamps = false;

	protected $casts = [
		'image_id' => 'int'
	];

	protected $fillable = [
		'url',
		'image_id'
	];

	public function image()
	{
		return $this->belongsTo(Image::class);
	}
}
