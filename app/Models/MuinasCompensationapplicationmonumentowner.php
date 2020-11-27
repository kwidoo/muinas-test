<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationmonumentowner
 * 
 * @property int $id
 * @property int $compensationapplication
 * @property string $name
 * @property string $email
 * @property string $code
 * @property string $phone
 * @property int|null $ownerperson
 *
 * @package App\Models
 */
class MuinasCompensationapplicationmonumentowner extends Model
{
	protected $table = 'muinas_compensationapplicationmonumentowner';
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'compensationapplication',
		'name',
		'email',
		'code',
		'phone',
		'ownerperson'
	];
}
