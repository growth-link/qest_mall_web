<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MallNotice
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $context
 * @property bool|null $is_read
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class MallNotice extends Model
{
	use SoftDeletes;
	protected $table = 'mall_notices';

	protected $casts = [
		'is_read' => 'bool'
	];

	protected $fillable = [
		'title',
		'context',
		'is_read'
	];
}
