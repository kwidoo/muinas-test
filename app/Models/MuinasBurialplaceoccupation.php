<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasBurialplaceoccupation
 * 
 * @property int $id
 * @property int $burialplace
 * @property int $occupation
 *
 * @package App\Models
 */
class MuinasBurialplaceoccupation extends Model
{
	protected $table = 'muinas_burialplaceoccupation';
	public $timestamps = false;

	protected $casts = [
		'burialplace' => 'int',
		'occupation' => 'int'
	];

	protected $fillable = [
		'burialplace',
		'occupation'
	];
}
