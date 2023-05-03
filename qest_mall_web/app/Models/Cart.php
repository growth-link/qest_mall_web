<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cart
 * 
 * @property int $id
 * @property int|null $shop_id
 * @property int|null $user_id
 * @property int|null $item_id
 * @property int|null $item_option_id
 * @property int|null $amount
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Cart extends Model
{
	use SoftDeletes;
	protected $table = 'carts';

	protected $casts = [
		'shop_id' => 'int',
		'user_id' => 'int',
		'item_id' => 'int',
		'item_option_id' => 'int',
		'amount' => 'int'
	];

	protected $fillable = [
		'shop_id',
		'user_id',
		'item_id',
		'item_option_id',
		'amount'
	];
}
