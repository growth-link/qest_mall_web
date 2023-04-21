<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusinessCalendar
 * 
 * @property int $shop_id
 * @property string|null $business_hours
 * @property string|null $basic_holiday
 * 
 * @property Shop $shop
 *
 * @package App\Models
 */
class BusinessCalendar extends Model
{
	protected $table = 'business_calendars';
	protected $primaryKey = 'shop_id';
	public $timestamps = false;

	protected $fillable = [
		'business_hours',
		'basic_holiday'
	];

	public function shop()
	{
		return $this->belongsTo(Shop::class);
	}
}
