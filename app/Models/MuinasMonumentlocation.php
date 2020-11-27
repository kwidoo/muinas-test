<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentlocation
 * 
 * @property int $id
 * @property int $monument
 * @property int $county
 * @property int $parish
 * @property string $address
 * @property Carbon $created
 * @property bool|null $classified
 * @property string $status
 * 
 * @property MuinasMonument $muinas_monument
 *
 * @package App\Models
 */
class MuinasMonumentlocation extends Model
{
	protected $table = 'muinas_monumentlocation';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'classified' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'monument',
		'county',
		'parish',
		'address',
		'created',
		'classified',
		'status'
	];

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}
}
