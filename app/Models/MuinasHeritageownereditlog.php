<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageownereditlog
 * 
 * @property int $heritageowner
 * @property int $heritage
 * @property Carbon $logtime
 * @property string $params
 * @property int $person
 * @property string $process
 * @property string $action
 * @property string $record
 *
 * @package App\Models
 */
class MuinasHeritageownereditlog extends Model
{
	protected $table = 'muinas_heritageownereditlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritageowner' => 'int',
		'heritage' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'heritageowner',
		'heritage',
		'logtime',
		'params',
		'person',
		'process',
		'action',
		'record'
	];
}
