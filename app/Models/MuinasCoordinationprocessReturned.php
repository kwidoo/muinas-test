<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationprocessReturned
 * 
 * @property int $coordinationprocess
 * @property string $comment
 * @property Carbon $date
 * @property Carbon $deadline
 * @property Carbon|null $system_notice_created
 * @property int|null $webdesktop
 * 
 * @property MuinasCoordinationprocess $muinas_coordinationprocess
 *
 * @package App\Models
 */
class MuinasCoordinationprocessReturned extends Model
{
	protected $table = 'muinas_coordinationprocess_returned';
	protected $primaryKey = 'coordinationprocess';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordinationprocess' => 'int',
		'webdesktop' => 'int'
	];

	protected $dates = [
		'date',
		'deadline',
		'system_notice_created'
	];

	protected $fillable = [
		'comment',
		'date',
		'deadline',
		'system_notice_created',
		'webdesktop'
	];

	public function muinas_coordinationprocess()
	{
		return $this->belongsTo(MuinasCoordinationprocess::class, 'coordinationprocess');
	}
}
