<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProceedHistoriesHeader
 * 
 * @property int $id
 * @property string|null $purchase_date
 * @property int|null $purchase_count
 *
 * @package App\Models
 */
class ProceedHistoriesHeader extends Model
{
	protected $table = 'proceed_histories_header';
	public $timestamps = false;

	protected $casts = [
		'purchase_count' => 'int'
	];

	protected $fillable = [
		'purchase_date',
		'purchase_count'
	];
}
