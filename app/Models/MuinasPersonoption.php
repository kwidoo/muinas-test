<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPersonoption
 * 
 * @property int $person
 * @property string $field
 * @property string $value
 *
 * @package App\Models
 */
class MuinasPersonoption extends Model
{
	protected $table = 'muinas_personoption';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'person' => 'int'
	];

	protected $fillable = [
		'value'
	];
}
