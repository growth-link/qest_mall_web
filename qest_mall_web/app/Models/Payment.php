<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $id
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';
	public $timestamps = false;
}
