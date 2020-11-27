<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuildingmonument
 * 
 * @property int $evmbuilding
 * @property int $monument
 * 
 * @property MuinasEvmbuilding $muinas_evmbuilding
 * @property MuinasMonument $muinas_monument
 *
 * @package App\Models
 */
class MuinasEvmbuildingmonument extends Model
{
	protected $table = 'muinas_evmbuildingmonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'evmbuilding' => 'int',
		'monument' => 'int'
	];

	protected $fillable = [
		'evmbuilding',
		'monument'
	];

	public function muinas_evmbuilding()
	{
		return $this->belongsTo(MuinasEvmbuilding::class, 'evmbuilding');
	}

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}
}
