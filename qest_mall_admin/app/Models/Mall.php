<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mall
 * 
 * @property int $id
 * @property string|null $company_name
 * @property string|null $company_name_kana
 * @property string|null $company_no
 * @property string|null $delegate_name
 * @property string|null $delegate_name_kana
 * @property string|null $delegate_tel_no
 * @property string|null $delegate_mail_address
 * @property string|null $post_code
 * @property int|null $prefecture_id
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $address3
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Mall extends Model
{
	use SoftDeletes;
	protected $table = 'mall';

	protected $casts = [
		'prefecture_id' => 'int'
	];

	protected $fillable = [
		'company_name',
		'company_name_kana',
		'company_no',
		'delegate_name',
		'delegate_name_kana',
		'delegate_tel_no',
		'delegate_mail_address',
		'post_code',
		'prefecture_id',
		'address1',
		'address2',
		'address3'
	];
}
