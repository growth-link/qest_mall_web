<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TopBanner
 * 
 * @property int $id
 * @property int|null $display_order
 * @property int $top_banner_type
 * @property int|null $image_id
 * @property Carbon|null $display_start_date
 * @property Carbon|null $display_end_date
 * @property Carbon|null $display_start_time
 * @property Carbon|null $display_end_time
 * @property string|null $url
 * 
 * @property Image|null $image
 *
 * @package App\Models
 */
class TopBanner extends Model
{
	protected $table = 'top_banners';
	public $timestamps = false;

	protected $casts = [
		'display_order' => 'int',
		'top_banner_type' => 'int',
		'image_id' => 'int'
	];

	protected $dates = [
		'display_start_date',
		'display_end_date',
		'display_start_time',
		'display_end_time'
	];

	protected $fillable = [
		'display_order',
		'top_banner_type',
		'image_id',
		'display_start_date',
		'display_end_date',
		'display_start_time',
		'display_end_time',
		'url'
	];

	public function image()
	{
		return $this->belongsTo(Image::class);
	}
}
