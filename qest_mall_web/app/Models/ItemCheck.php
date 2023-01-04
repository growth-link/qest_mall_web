<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemCheck
 * 
 * @property int $item_id
 * @property int|null $is_required
 *
 * @package App\Models
 */
class ItemCheck extends Model
{
	protected $table = 'item_checks';
	protected $primaryKey = 'item_id';
	public $timestamps = false;

	protected $casts = [
		'is_required' => 'int'
	];

	protected $fillable = [
		'is_required'
	];
}
