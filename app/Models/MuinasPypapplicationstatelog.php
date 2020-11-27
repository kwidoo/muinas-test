<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationstatelog
 * 
 * @property int $id
 * @property int $pypapplication
 * @property string|null $state
 * @property string $name
 * @property string $message
 * @property Carbon $created
 * 
 * @property MuinasPypapplication $muinas_pypapplication
 *
 * @package App\Models
 */
class MuinasPypapplicationstatelog extends Model
{
	protected $table = 'muinas_pypapplicationstatelog';
	public $timestamps = false;

	protected $casts = [
		'pypapplication' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'pypapplication',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'pypapplication');
	}
}
