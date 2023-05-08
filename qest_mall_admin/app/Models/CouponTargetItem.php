<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CouponTargetItem
 * 
 * @property int|null $coupon_id
 * @property int|null $item_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updaated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class CouponTargetItem extends Model
{
	use SoftDeletes;
	protected $table = 'coupon_target_items';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coupon_id' => 'int',
		'item_id' => 'int',
		'updaated_at' => 'datetime'
	];

	protected $fillable = [
		'coupon_id',
		'item_id',
		'updaated_at'
	];
}
