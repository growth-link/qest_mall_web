<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ad
 * 
 * @property int $id
 * @property int $ad_type
 * @property string|null $url
 * @property int|null $image_id
 * 
 * @property Image|null $image
 *
 * @package App\Models
 */
class Ad extends Model
{
	protected $table = 'ads';
	public $timestamps = false;

	protected $casts = [
		'ad_type' => 'int',
		'image_id' => 'int'
	];

	protected $fillable = [
		'ad_type',
		'url',
		'image_id'
	];

	public function image()
	{
		return $this->belongsTo(Image::class);
	}
}
