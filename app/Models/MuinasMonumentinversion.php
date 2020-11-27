<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentinversion
 * 
 * @property int $monument
 * @property string $invertors
 * @property int $person
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasMonumentinversion extends Model
{
	protected $table = 'muinas_monumentinversion';
	protected $primaryKey = 'monument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'invertors',
		'person',
		'created'
	];
}
