<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticestatelog
 * 
 * @property int $id
 * @property int $citizendivenotice
 * @property string $state
 * @property string|null $name
 * @property string|null $message
 * @property Carbon $created
 * 
 * @property MuinasCitizendivenotice $muinas_citizendivenotice
 *
 * @package App\Models
 */
class MuinasCitizendivenoticestatelog extends Model
{
	protected $table = 'muinas_citizendivenoticestatelog';
	public $timestamps = false;

	protected $casts = [
		'citizendivenotice' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'citizendivenotice',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_citizendivenotice()
	{
		return $this->belongsTo(MuinasCitizendivenotice::class, 'citizendivenotice');
	}
}
