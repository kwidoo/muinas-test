<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasNotification
 * 
 * @property int $id
 * @property string|null $number
 * @property int $person
 * @property Carbon $created
 * @property string $status
 * 
 * @property Collection|MuinasNotificationmuinasobject[] $muinas_notificationmuinasobjects
 *
 * @package App\Models
 */
class MuinasNotification extends Model
{
	protected $table = 'muinas_notification';
	public $timestamps = false;

	protected $casts = [
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'number',
		'person',
		'created',
		'status'
	];

	public function muinas_notificationmuinasobjects()
	{
		return $this->hasMany(MuinasNotificationmuinasobject::class, 'notification');
	}
}
