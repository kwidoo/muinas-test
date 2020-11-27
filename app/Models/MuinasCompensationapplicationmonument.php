<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationmonument
 * 
 * @property int $id
 * @property int $compensationapplication
 * @property string $addresstext
 * @property int $monument
 * @property int|null $address
 *
 * @package App\Models
 */
class MuinasCompensationapplicationmonument extends Model
{
	protected $table = 'muinas_compensationapplicationmonument';
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'monument' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'compensationapplication',
		'addresstext',
		'monument',
		'address'
	];
}
