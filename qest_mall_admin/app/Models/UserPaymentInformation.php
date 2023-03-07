<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPaymentInformation
 * 
 * @property int $id
 * @property int|null $creditcard_token
 * @property int|null $creditcard_suffix
 *
 * @package App\Models
 */
class UserPaymentInformation extends Model
{
	protected $table = 'user_payment_informations';
	public $timestamps = false;

	protected $casts = [
		'creditcard_token' => 'int',
		'creditcard_suffix' => 'int'
	];

	protected $hidden = [
		'creditcard_token'
	];

	protected $fillable = [
		'creditcard_token',
		'creditcard_suffix'
	];
}
