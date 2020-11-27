<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticereportstatelog
 * 
 * @property int $id
 * @property int $citizendivenoticereport
 * @property string $state
 * @property string|null $name
 * @property string|null $message
 * @property Carbon $created
 * 
 * @property MuinasCitizendivenoticereport $muinas_citizendivenoticereport
 *
 * @package App\Models
 */
class MuinasCitizendivenoticereportstatelog extends Model
{
	protected $table = 'muinas_citizendivenoticereportstatelog';
	public $timestamps = false;

	protected $casts = [
		'citizendivenoticereport' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'citizendivenoticereport',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_citizendivenoticereport()
	{
		return $this->belongsTo(MuinasCitizendivenoticereport::class, 'citizendivenoticereport');
	}
}
