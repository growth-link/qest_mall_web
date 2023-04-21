<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DeliverySizeType
 * 
 * @property int $id
 * @property string|null $delivery_size_type_name
 *
 * @package App\Models
 */
class DeliverySizeType extends Model
{
	protected $table = 'delivery_size_types';
	public $timestamps = false;

	protected $fillable = [
		'delivery_size_type_name'
	];
}
