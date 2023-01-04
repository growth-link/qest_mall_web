<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ItemImage
 * 
 * @property int|null $item_id
 * @property int|null $image_url
 * @property bool|null $is_sumbnail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class ItemImage extends Model
{
	use SoftDeletes;
	protected $table = 'item_images';
	public $incrementing = false;

	protected $casts = [
		'item_id' => 'int',
		'image_url' => 'int',
		'is_sumbnail' => 'bool'
	];

	protected $fillable = [
		'item_id',
		'image_url',
		'is_sumbnail'
	];
}
