<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumenttrash
 * 
 * @property int $monument
 * @property Carbon $created
 * @property string $explanation
 * @property string $person
 * @property string $monumentdata
 *
 * @package App\Models
 */
class MuinasMonumenttrash extends Model
{
	protected $table = 'muinas_monumenttrash';
	protected $primaryKey = 'monument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'created',
		'explanation',
		'person',
		'monumentdata'
	];
}
