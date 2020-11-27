<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageupdate
 * 
 * @property int $heritage
 * @property string $type
 * @property Carbon|null $next
 * 
 * @property MuinasHeritage $muinas_heritage
 *
 * @package App\Models
 */
class MuinasHeritageupdate extends Model
{
	protected $table = 'muinas_heritageupdate';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int'
	];

	protected $dates = [
		'next'
	];

	protected $fillable = [
		'next'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}
}
