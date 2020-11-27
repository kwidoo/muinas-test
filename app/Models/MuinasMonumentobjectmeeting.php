<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentobjectmeeting
 * 
 * @property int $id
 * @property int $monument
 * @property Carbon $created
 * @property int $person
 * @property string $description
 * @property bool|null $latest
 *
 * @package App\Models
 */
class MuinasMonumentobjectmeeting extends Model
{
	protected $table = 'muinas_monumentobjectmeeting';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'person' => 'int',
		'latest' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'monument',
		'created',
		'person',
		'description',
		'latest'
	];
}
