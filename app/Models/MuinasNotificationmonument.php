<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasNotificationmonument
 * 
 * @property int $monument
 * @property int $notification
 * @property int $address
 *
 * @package App\Models
 */
class MuinasNotificationmonument extends Model
{
	protected $table = 'muinas_notificationmonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'notification' => 'int',
		'address' => 'int'
	];
}
