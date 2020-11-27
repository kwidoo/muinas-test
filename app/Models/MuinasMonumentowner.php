<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentowner
 * 
 * @property int $id
 * @property int $monument
 * @property int $ownerperson
 * @property string $relation
 * @property string $cohesion
 * @property Carbon $created
 * @property Carbon|null $enddate
 * @property bool|null $classified
 * @property bool|null $expired
 * @property Carbon|null $modified
 * @property string $source
 * @property Carbon|null $updated
 * @property string|null $toremove
 * @property Carbon|null $toremovedate
 * 
 * @property MuinasOwnerperson $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasMonumentowner extends Model
{
	protected $table = 'muinas_monumentowner';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'ownerperson' => 'int',
		'classified' => 'bool',
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
		'monument',
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

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
