<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticeresearchobject
 * 
 * @property int $id
 * @property int|null $worknotice
 * @property string|null $address
 * @property string|null $coordinates
 * @property int|null $county
 * @property int|null $parish
 *
 * @package App\Models
 */
class MuinasWorknoticeresearchobject extends Model
{
	protected $table = 'muinas_worknoticeresearchobject';
	public $timestamps = false;

	protected $casts = [
		'worknotice' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $fillable = [
		'worknotice',
		'address',
		'coordinates',
		'county',
		'parish'
	];
}
