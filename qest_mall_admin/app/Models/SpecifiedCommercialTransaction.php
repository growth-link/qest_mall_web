<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecifiedCommercialTransaction
 * 
 * @property int $shop_id
 * @property string|null $product_delivery_schedule
 * @property string|null $payment_method_and_deadline
 * 
 * @property Shop $shop
 *
 * @package App\Models
 */
class SpecifiedCommercialTransaction extends Model
{
	protected $table = 'specified_commercial_transactions';
	protected $primaryKey = 'shop_id';
	public $timestamps = false;

	protected $fillable = [
		'product_delivery_schedule',
		'payment_method_and_deadline'
	];

	public function shop()
	{
		return $this->belongsTo(Shop::class);
	}
}
