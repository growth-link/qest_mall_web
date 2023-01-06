<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 * 
 * @property int $brand_id
 *
 * @package App\Models
 */
class Brand extends Model
{
	protected $table = 'brands';
	protected $primaryKey = 'brand_id';
	public $timestamps = false;
}
