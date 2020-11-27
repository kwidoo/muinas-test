<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageowner
 * 
 * @property int $id
 * @property int $heritage
 * @property int $ownerperson
 * @property string $relation
 * @property string $cohesion
 * @property Carbon $created
 * @property Carbon|null $enddate
 * @property int|null $classified
 * @property bool|null $expired
 * @property Carbon|null $modified
 * @property string|null $source
 * @property Carbon|null $updated
 * @property string|null $toremove
 * @property Carbon|null $toremovedate
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasOwnerperson $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasHeritageowner extends Model
{
	protected $table = 'muinas_heritageowner';
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'ownerperson' => 'int',
		'classified' => 'int',
		'expired' => 'bool'
	];

	protected $dates = [
		'created',
		'enddate',
		'modified',
		'updated',
		'toremovedate'
	];

	protected $fillable = [
		'heritage',
		'ownerperson',
		'relation',
		'cohesion',
		'created',
		'enddate',
		'classified',
		'expired',
		'modified',
		'source',
		'updated',
		'toremove',
		'toremovedate'
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
