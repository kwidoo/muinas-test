<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentaddress
 * 
 * @property int $id
 * @property int $monument
 * @property Carbon $created
 * @property bool|null $classified
 * @property string $status
 * @property int $address
 * @property string $cohesion
 * @property string $source
 * @property Carbon|null $updated
 * 
 * @property MuinasMonument $muinas_monument
 * @property MuinasAddress $muinas_address
 *
 * @package App\Models
 */
class MuinasMonumentaddress extends Model
{
	protected $table = 'muinas_monumentaddress';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'classified' => 'bool',
		'address' => 'int'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'monument',
		'created',
		'classified',
		'status',
		'address',
		'cohesion',
		'source',
		'updated'
	];

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
