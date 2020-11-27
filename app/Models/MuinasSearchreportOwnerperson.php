<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportOwnerperson
 * 
 * @property int $searchreport
 * @property int $ownerperson
 * @property string $source
 * @property Carbon $stamp
 * 
 * @property MuinasSearchreport $muinas_searchreport
 * @property MuinasOwnerperson $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasSearchreportOwnerperson extends Model
{
	protected $table = 'muinas_searchreport_ownerperson';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int',
		'ownerperson' => 'int'
	];

	protected $dates = [
		'stamp'
	];

	protected $fillable = [
		'source',
		'stamp'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
