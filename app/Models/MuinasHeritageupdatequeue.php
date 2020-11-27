<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageupdatequeue
 * 
 * @property int $heritage
 * @property string $type
 * @property Carbon|null $queued
 * 
 * @property MuinasHeritage $muinas_heritage
 *
 * @package App\Models
 */
class MuinasHeritageupdatequeue extends Model
{
	protected $table = 'muinas_heritageupdatequeue';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int'
	];

	protected $dates = [
		'queued'
	];

	protected $fillable = [
		'queued'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}
}
