<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PurchaseLimitCondition
 * 
 * @property int $id
 *
 * @package App\Models
 */
class PurchaseLimitCondition extends Model
{
	protected $table = 'purchase_limit_conditions';
	public $timestamps = false;
}
