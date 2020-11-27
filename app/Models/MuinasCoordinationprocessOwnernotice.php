<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationprocessOwnernotice
 * 
 * @property int $coordinationprocess
 * @property int $ownerperson
 * @property string $email
 * @property Carbon|null $notice_sent
 * 
 * @property MuinasCoordinationprocess $muinas_coordinationprocess
 * @property MuinasOwnerperson $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasCoordinationprocessOwnernotice extends Model
{
	protected $table = 'muinas_coordinationprocess_ownernotice';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordinationprocess' => 'int',
		'ownerperson' => 'int'
	];

	protected $dates = [
		'notice_sent'
	];

	protected $fillable = [
		'email',
		'notice_sent'
	];

	public function muinas_coordinationprocess()
	{
		return $this->belongsTo(MuinasCoordinationprocess::class, 'coordinationprocess');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
