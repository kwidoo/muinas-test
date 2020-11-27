<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMuinasobjectmonument
 * 
 * @property int $muinasobject
 * @property int $monument
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasMonument $muinas_monument
 *
 * @package App\Models
 */
class MuinasMuinasobjectmonument extends Model
{
	protected $table = 'muinas_muinasobjectmonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'monument' => 'int'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}
}
