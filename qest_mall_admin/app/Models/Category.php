<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $category_name
 * @property int|null $image_id
 * 
 * @property Image|null $image
 * @property Category|null $category
 * @property Collection|Category[] $categories
 * @property Collection|Item[] $items
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'image_id' => 'int'
	];

	protected $fillable = [
		'parent_id',
		'category_name',
		'image_id'
	];

	public function image()
	{
		return $this->belongsTo(Image::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class, 'parent_id');
	}

	public function categories()
	{
		return $this->hasMany(Category::class, 'parent_id');
	}

	public function items()
	{
		return $this->hasMany(Item::class);
	}
}
