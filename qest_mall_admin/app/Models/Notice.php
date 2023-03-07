<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Notice
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $text
 * @property int|null $icon_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Notice extends Model
{
	use SoftDeletes;
	protected $table = 'notices';

	protected $casts = [
		'icon_id' => 'int'
	];

	protected $fillable = [
		'title',
		'text',
		'icon_id'
	];
}
