<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FavoritesShop
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $shop_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class FavoritesShop extends Model
{
	use SoftDeletes;
	protected $table = 'favorites_shop';

	protected $casts = [
		'user_id' => 'int',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'shop_id'
	];
}
