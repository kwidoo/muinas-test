<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationprocessComment
 * 
 * @property int $id
 * @property int $coordinationprocess
 * @property Carbon $created
 * @property int $person
 * @property string|null $comment
 * 
 * @property MuinasCoordinationprocess $muinas_coordinationprocess
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasCoordinationprocessComment extends Model
{
	protected $table = 'muinas_coordinationprocess_comment';
	public $timestamps = false;

	protected $casts = [
		'coordinationprocess' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'coordinationprocess',
		'created',
		'person',
		'comment'
	];

	public function muinas_coordinationprocess()
	{
		return $this->belongsTo(MuinasCoordinationprocess::class, 'coordinationprocess');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
