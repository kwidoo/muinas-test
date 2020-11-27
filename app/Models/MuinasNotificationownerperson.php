<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasNotificationownerperson
 * 
 * @property int $ownerperson
 * @property int $notification
 * 
 * @property MuinasOwnerperson $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasNotificationownerperson extends Model
{
	protected $table = 'muinas_notificationownerperson';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'notification' => 'int'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
