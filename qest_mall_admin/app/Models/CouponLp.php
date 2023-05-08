<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CouponLp
 * 
 * @property int $id
 * @property int|null $coupon_id
 * @property int|null $display_sort
 * @property string|null $image_id
 *
 * @package App\Models
 */
class CouponLp extends Model
{
	protected $table = 'coupon_lps';
	public $timestamps = false;

	protected $casts = [
		'coupon_id' => 'int',
		'display_sort' => 'int'
	];

	protected $fillable = [
		'coupon_id',
		'display_sort',
		'image_id'
	];
}
