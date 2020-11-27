<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentrkvrobject
 * 
 * @property int $monument
 * @property string $rkvrobject
 * @property string $cohesion
 *
 * @package App\Models
 */
class MuinasMonumentrkvrobject extends Model
{
	protected $table = 'muinas_monumentrkvrobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $fillable = [
		'cohesion'
	];
}
