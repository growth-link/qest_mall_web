<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SubCategory
 *
 * @property int $sub_category_id
 * @property string|null $sub_category_name
 * @property string|null $url
 * @property int|null $image_id
 * @property string|null $icon_url
 *
 * @property Image|null $image
 *
 * @package App\Models
 */
class SubCategory extends Model
{
	protected $table = 'sub_categories';
	protected $primaryKey = 'sub_category_id';
	public $timestamps = false;

	protected $casts = [
		'image_id' => 'int'
	];

	protected $fillable = [
		'sub_category_name',
		'url',
		'image_id',
		'icon_url'
	];

	public function image()
	{
		return $this->belongsTo(Image::class, 'image_id');
	}
}
