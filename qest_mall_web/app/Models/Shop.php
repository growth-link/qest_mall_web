<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Shop
 * 
 * @property int $id
 * @property string|null $shop_name
 * @property string|null $shop_name_kana
 * @property string|null $shop_tt_code
 * @property int|null $visibility_status
 * @property string|null $officer_name
 * @property string|null $officer_name_kana
 * @property int $is_same_officer
 * @property string|null $personal_info_officer_name
 * @property string|null $personal_info_officer_name_kana
 * @property int|null $tel
 * @property string|null $mail
 * @property int|null $zip_code
 * @property int|null $prefecture_id
 * @property string|null $city
 * @property string|null $address
 * @property string|null $building
 * @property int|null $industry_id
 * @property string|null $category
 * @property string|null $introduction
 * @property int|null $image_id
 * @property string|null $banner_url
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Image|null $image
 * @property Collection|Item[] $items
 *
 * @package App\Models
 */
class Shop extends Model
{
	use SoftDeletes;
	protected $table = 'shops';

	protected $casts = [
		'visibility_status' => 'int',
		'is_same_officer' => 'int',
		'tel' => 'int',
		'zip_code' => 'int',
		'prefecture_id' => 'int',
		'industry_id' => 'int',
		'image_id' => 'int'
	];

	protected $fillable = [
		'shop_name',
		'shop_name_kana',
		'shop_tt_code',
		'visibility_status',
		'officer_name',
		'officer_name_kana',
		'is_same_officer',
		'personal_info_officer_name',
		'personal_info_officer_name_kana',
		'tel',
		'mail',
		'zip_code',
		'prefecture_id',
		'city',
		'address',
		'building',
		'industry_id',
		'category',
		'introduction',
		'image_id',
		'banner_url'
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
