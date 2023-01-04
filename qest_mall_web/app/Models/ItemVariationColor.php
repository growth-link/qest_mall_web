<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemVariationColor
 * 
 * @property int $id
 * @property int|null $color
 * @property int|null $item_image_id
 *
 * @package App\Models
 */
class ItemVariationColor extends Model
{
	protected $table = 'item_variation_colors';
	public $timestamps = false;

	protected $casts = [
		'color' => 'int',
		'item_image_id' => 'int'
	];

	protected $fillable = [
		'color',
		'item_image_id'
	];
}
