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
 * @property int $item_image_id
 * @property int $item_id
 * @property string|null $image_url
 * @property bool|null $is_sumbnail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Item $item
 *
 * @package App\Models
 */
class ItemImage extends Model
{
	use SoftDeletes;
	protected $table = 'item_images';
	protected $primaryKey = 'item_image_id';

	protected $casts = [
		'item_id' => 'int',
		'is_sumbnail' => 'bool'
	];

	protected $fillable = [
		'item_id',
		'image_url',
		'is_sumbnail'
	];

	public function item()
	{
		return $this->belongsTo(Item::class);
	}
}
