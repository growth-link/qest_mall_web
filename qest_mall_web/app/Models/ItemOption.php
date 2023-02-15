<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemOption
 * 
 * @property int $id
 * @property string|null $option_name
 * @property string|null $type_name
 * @property int|null $is_minus_price
 * @property int|null $price
 *
 * @package App\Models
 */
class ItemOption extends Model
{
	protected $table = 'item_options';
	public $timestamps = false;

	protected $casts = [
		'is_minus_price' => 'int',
		'price' => 'int'
	];

	protected $fillable = [
		'option_name',
		'type_name',
		'is_minus_price',
		'price'
	];
}
