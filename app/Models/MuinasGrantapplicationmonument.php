<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clas
 * 
 * @property int $id
 * @property int $grantapplication
 * @property string $addresstext
 * @property int $monument
 * @property int|null $address
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasMonument $muinas_monument
 * @property MuinasAddress|null $muinas_address
 *
 * @package App\Models
 */
class MuinasGrantapplicationmonument extends Model
{
	use HasFactory;

	protected $table = 'muinas_grantapplicationmonument';
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'monument' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'grantapplication',
		'addresstext',
		'monument',
		'address'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
