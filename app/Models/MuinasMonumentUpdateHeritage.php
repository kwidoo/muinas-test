<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentUpdateHeritage
 * 
 * @property int $monument
 * @property string $catastralunit
 * @property int|null $heritage
 * @property Carbon $created
 * @property Carbon|null $updated
 * @property Carbon|null $ceased
 * 
 * @property MuinasMonument $muinas_monument
 * @property MuinasHeritage|null $muinas_heritage
 *
 * @package App\Models
 */
class MuinasMonumentUpdateHeritage extends Model
{
	protected $table = 'muinas_monument_update_heritage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'heritage' => 'int'
	];

	protected $dates = [
		'created',
		'updated',
		'ceased'
	];

	protected $fillable = [
		'heritage',
		'created',
		'updated',
		'ceased'
	];

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}
}
