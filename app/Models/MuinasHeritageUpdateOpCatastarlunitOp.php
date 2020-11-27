<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageUpdateOpCatastarlunitOp
 * 
 * @property int $heritage
 * @property string $catastralunit
 * @property int $ownerperson
 * @property Carbon $created
 * @property Carbon|null $updated
 * @property Carbon|null $ceased
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasOwnerperson $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasHeritageUpdateOpCatastarlunitOp extends Model
{
	protected $table = 'muinas_heritage_update_op_catastarlunit_op';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'ownerperson' => 'int'
	];

	protected $dates = [
		'created',
		'updated',
		'ceased'
	];

	protected $fillable = [
		'created',
		'updated',
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
