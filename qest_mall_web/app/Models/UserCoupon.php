<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserCoupon
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $coupon_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class UserCoupon extends Model
{
	use SoftDeletes;
	protected $table = 'user_coupons';

	protected $casts = [
		'user_id' => 'int',
		'coupon_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'coupon_id'
	];
}
