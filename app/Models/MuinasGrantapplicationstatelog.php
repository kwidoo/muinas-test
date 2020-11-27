<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationstatelog
 * 
 * @property int $id
 * @property int $grantapplication
 * @property string|null $state
 * @property string $name
 * @property string|null $message
 * @property Carbon $created
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 *
 * @package App\Models
 */
class MuinasGrantapplicationstatelog extends Model
{
	protected $table = 'muinas_grantapplicationstatelog';
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'grantapplication',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}
}
