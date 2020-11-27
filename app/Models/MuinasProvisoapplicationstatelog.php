<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationstatelog
 * 
 * @property int $id
 * @property int $provisoapplication
 * @property string $state
 * @property string|null $name
 * @property string|null $message
 * @property Carbon $created
 * 
 * @property MuinasProvisoapplication $muinas_provisoapplication
 *
 * @package App\Models
 */
class MuinasProvisoapplicationstatelog extends Model
{
	protected $table = 'muinas_provisoapplicationstatelog';
	public $timestamps = false;

	protected $casts = [
		'provisoapplication' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'provisoapplication',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication');
	}
}
