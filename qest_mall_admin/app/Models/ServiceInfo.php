<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceInfo
 * 
 * @property int $id
 * @property string|null $service_name
 * @property string|null $service_name_kana
 * @property string|null $service_manager_name
 * @property string|null $service_manager_name_kana
 * @property string|null $privacy_manager_name
 * @property string|null $privacy_manager_name_kana
 * @property string|null $tel
 * @property string|null $mail
 * @property string|null $post_code
 * @property int|null $prefecture_id
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $address3
 *
 * @package App\Models
 */
class ServiceInfo extends Model
{
	protected $table = 'service_info';
	public $timestamps = false;

	protected $casts = [
		'prefecture_id' => 'int'
	];

	protected $fillable = [
		'service_name',
		'service_name_kana',
		'service_manager_name',
		'service_manager_name_kana',
		'privacy_manager_name',
		'privacy_manager_name_kana',
		'tel',
		'mail',
		'post_code',
		'prefecture_id',
		'address1',
		'address2',
		'address3'
	];
}
