<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageupdatelog
 * 
 * @property int $heritage
 * @property string|null $type
 * @property Carbon|null $start
 * @property Carbon|null $updated
 * @property string|null $status
 * @property string|null $message
 * @property string|null $log
 * 
 * @property MuinasHeritage $muinas_heritage
 *
 * @package App\Models
 */
class MuinasHeritageupdatelog extends Model
{
	protected $table = 'muinas_heritageupdatelog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int'
	];

	protected $dates = [
		'start',
		'updated'
	];

	protected $fillable = [
		'heritage',
		'type',
		'start',
		'updated',
		'status',
		'message',
		'log'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}
}
