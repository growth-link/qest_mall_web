<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubCategory
 * 
 * @property int $id
 * @property string|null $sub_category_name
 * @property string|null $url
 * @property int|null $image_id
 * @property string|null $icon_url
 * @property string|null $top_banner_url
 * @property string|null $sp_top_banner_url
 * 
 * @property Image|null $image
 * @property Collection|Item[] $items
 *
 * @package App\Models
 */
class SubCategory extends Model
{
	protected $table = 'sub_categories';
	public $timestamps = false;

	protected $casts = [
		'image_id' => 'int'
	];

	protected $fillable = [
		'sub_category_name',
		'url',
		'image_id',
		'icon_url',
		'top_banner_url',
		'sp_top_banner_url'
	];

	public function image()
	{
		return $this->belongsTo(Image::class);
	}

	public function items()
	{
		return $this->hasMany(Item::class);
	}
}
