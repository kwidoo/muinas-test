<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageaddress
 * 
 * @property int $id
 * @property int $heritage
 * @property int $address
 * @property Carbon $created
 * @property bool|null $classified
 * @property string|null $status
 * @property string|null $cohesion
 * @property string $source
 * @property Carbon|null $updated
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasAddress $muinas_address
 *
 * @package App\Models
 */
class MuinasHeritageaddress extends Model
{
	protected $table = 'muinas_heritageaddress';
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'address' => 'int',
		'classified' => 'bool'
	];

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'heritage',
		'address',
		'created',
		'classified',
		'status',
		'cohesion',
		'source',
		'updated'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
