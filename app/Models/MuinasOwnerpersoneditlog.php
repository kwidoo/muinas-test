<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOwnerpersoneditlog
 * 
 * @property int $ownerperson
 * @property Carbon $logtime
 * @property string $params
 * @property int $person
 * @property string $process
 * @property string $action
 * 
 * @property MuinasOwnerperson $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasOwnerpersoneditlog extends Model
{
	protected $table = 'muinas_ownerpersoneditlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'ownerperson',
		'logtime',
		'params',
		'person',
		'process',
		'action'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
