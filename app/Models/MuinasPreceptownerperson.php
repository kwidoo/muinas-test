<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPreceptownerperson
 * 
 * @property int $ownerperson
 * @property int $precept
 * @property Carbon|null $noticesent
 * 
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property MuinasPrecept $muinas_precept
 *
 * @package App\Models
 */
class MuinasPreceptownerperson extends Model
{
	protected $table = 'muinas_preceptownerperson';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'precept' => 'int'
	];

	protected $dates = [
		'noticesent'
	];

	protected $fillable = [
		'noticesent'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_precept()
	{
		return $this->belongsTo(MuinasPrecept::class, 'precept');
	}
}
