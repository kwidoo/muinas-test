<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageOwnerperson
 * 
 * @property int $heritage
 * @property int $ownerperson
 * @property string $relation
 * @property string|null $source
 * @property Carbon|null $ceased
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasOwnerperson $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasHeritageOwnerperson extends Model
{
	protected $table = 'muinas_heritage_ownerperson';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'ownerperson' => 'int'
	];

	protected $dates = [
		'ceased'
	];

	protected $fillable = [
		'relation',
		'source',
		'ceased'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
