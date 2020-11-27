<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticeperson
 * 
 * @property int $id
 * @property int $lmnotice
 * @property string $forename
 * @property string $surname
 * @property string $type
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticeperson extends Model
{
	protected $table = 'muinas_placeinfolmnoticeperson';
	public $timestamps = false;

	protected $casts = [
		'lmnotice' => 'int'
	];

	protected $fillable = [
		'lmnotice',
		'forename',
		'surname',
		'type'
	];
}
