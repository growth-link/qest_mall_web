<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class APurchaseHistory
 * 
 * @property int $id
 * @property int|null $item_id
 * @property int|null $purchase_quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Item|null $item
 *
 * @package App\Models
 */
class APurchaseHistory extends Model
{
	use SoftDeletes;
	protected $table = 'a_purchase_histories';

	protected $casts = [
		'item_id' => 'int',
		'purchase_quantity' => 'int'
	];

	protected $fillable = [
		'item_id',
		'purchase_quantity'
	];

	public function item()
	{
		return $this->belongsTo(Item::class);
	}
}
