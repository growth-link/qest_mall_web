<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemFilterColor
 * 
 * @property int $id
 * @property int|null $filter_color_id
 *
 * @package App\Models
 */
class ItemFilterColor extends Model
{
	protected $table = 'item_filter_colors';
	public $timestamps = false;

	protected $casts = [
		'filter_color_id' => 'int'
	];

	protected $fillable = [
		'filter_color_id'
	];
}
