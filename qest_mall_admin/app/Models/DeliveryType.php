<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DeliveryType
 * 
 * @property int $id
 * @property string|null $delivery_type_name
 *
 * @package App\Models
 */
class DeliveryType extends Model
{
	protected $table = 'delivery_type';
	public $timestamps = false;

	protected $fillable = [
		'delivery_type_name'
	];
}
