<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationfile
 * 
 * @property int $id
 * @property int $coordination
 * @property string $title
 * @property string $name
 *
 * @package App\Models
 */
class MuinasCoordinationfile extends Model
{
	protected $table = 'muinas_coordinationfile';
	public $timestamps = false;

	protected $casts = [
		'coordination' => 'int'
	];

	protected $fillable = [
		'coordination',
		'title',
		'name'
	];
}
