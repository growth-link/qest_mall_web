<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserDeliveryInformation
 * 
 * @property int $id
 * @property int|null $post_code
 *
 * @package App\Models
 */
class UserDeliveryInformation extends Model
{
	protected $table = 'user_delivery_informations';
	public $timestamps = false;

	protected $casts = [
		'post_code' => 'int'
	];

	protected $fillable = [
		'post_code'
	];
}
