<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMuinasobjectheritage
 * 
 * @property int $muinasobject
 * @property int $heritage
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasHeritage $muinas_heritage
 *
 * @package App\Models
 */
class MuinasMuinasobjectheritage extends Model
{
	protected $table = 'muinas_muinasobjectheritage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'heritage' => 'int'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}
}
