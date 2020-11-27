<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasNotificationmuinasobject
 * 
 * @property int $muinasobject
 * @property int $notification
 * @property int|null $address
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasNotification $muinas_notification
 * @property MuinasAddress|null $muinas_address
 *
 * @package App\Models
 */
class MuinasNotificationmuinasobject extends Model
{
	protected $table = 'muinas_notificationmuinasobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'notification' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'address'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_notification()
	{
		return $this->belongsTo(MuinasNotification::class, 'notification');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
