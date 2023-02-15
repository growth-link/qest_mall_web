<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * 
 * @property int $id
 * @property string|null $url
 * 
 * @property Collection|Ad[] $ads
 * @property Collection|Brand[] $brands
 * @property Collection|Category[] $categories
 * @property Collection|Coupon[] $coupons
 * @property Collection|Shop[] $shops
 * @property Collection|SubCategory[] $sub_categories
 * @property Collection|TopBanner[] $top_banners
 *
 * @package App\Models
 */
class Image extends Model
{
	protected $table = 'images';
	public $timestamps = false;

	protected $fillable = [
		'url'
	];

	public function ads()
	{
		return $this->hasMany(Ad::class);
	}

	public function brands()
	{
		return $this->hasMany(Brand::class);
	}

	public function categories()
	{
		return $this->hasMany(Category::class);
	}

	public function coupons()
	{
		return $this->hasMany(Coupon::class);
	}

	public function shops()
	{
		return $this->hasMany(Shop::class);
	}

	public function sub_categories()
	{
		return $this->hasMany(SubCategory::class);
	}

	public function top_banners()
	{
		return $this->hasMany(TopBanner::class);
	}
}
