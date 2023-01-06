<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserInvoiceInformation
 * 
 * @property int $user_id
 * @property int|null $post_code
 *
 * @package App\Models
 */
class UserInvoiceInformation extends Model
{
	protected $table = 'user_invoice_informations';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $casts = [
		'post_code' => 'int'
	];

	protected $fillable = [
		'post_code'
	];
}
