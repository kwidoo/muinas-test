<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPersoneditlog
 * 
 * @property int $id
 * @property int $person
 * @property Carbon $logtime
 * @property int $editor
 * @property string|null $params
 * @property string|null $record
 * @property string|null $process
 * @property string $action
 *
 * @package App\Models
 */
class MuinasPersoneditlog extends Model
{
	protected $table = 'muinas_personeditlog';
	public $timestamps = false;

	protected $casts = [
		'person' => 'int',
		'editor' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'person',
		'logtime',
		'editor',
		'params',
		'record',
		'process',
		'action'
	];
}
