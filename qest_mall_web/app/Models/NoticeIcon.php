<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NoticeIcon
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $icon_url
 *
 * @package App\Models
 */
class NoticeIcon extends Model
{
	protected $table = 'notice_icons';
	public $timestamps = false;

	protected $fillable = [
		'title',
		'icon_url'
	];
}
