<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prefecture
 * 
 * @property int $id
 * @property string|null $prefecture_name
 *
 * @package App\Models
 */
class Prefecture extends Model
{
	protected $table = 'prefectures';
	public $timestamps = false;

	protected $fillable = [
		'prefecture_name'
	];
}
