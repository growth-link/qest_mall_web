<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemRecommend
 * 
 * @property int $id
 * @property int|null $recommend_item_id
 *
 * @package App\Models
 */
class ItemRecommend extends Model
{
	protected $table = 'item_recommends';
	public $timestamps = false;

	protected $casts = [
		'recommend_item_id' => 'int'
	];

	protected $fillable = [
		'recommend_item_id'
	];
}
