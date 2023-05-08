<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Statistic
 * 
 * @property int $id
 * @property int|null $type
 * @property Carbon|null $start_at
 * @property Carbon|null $end_at
 * @property int|null $subject_type
 * @property int|null $tax_type
 * @property int|null $price
 * @property int|null $sq_no
 * @property int|null $payment_id
 * @property Carbon|null $send_at
 * @property Carbon|null $created_at
 * @property Carbon|null $udpated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Statistic extends Model
{
	use SoftDeletes;
	protected $table = 'statistics';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'start_at' => 'datetime',
		'end_at' => 'datetime',
		'subject_type' => 'int',
		'tax_type' => 'int',
		'price' => 'int',
		'sq_no' => 'int',
		'payment_id' => 'int',
		'send_at' => 'datetime',
		'udpated_at' => 'datetime'
	];

	protected $fillable = [
		'type',
		'start_at',
		'end_at',
		'subject_type',
		'tax_type',
		'price',
		'sq_no',
		'payment_id',
		'send_at',
		'udpated_at'
	];
}
