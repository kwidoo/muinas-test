<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPersonnotice
 * 
 * @property int $person
 * @property string $notice
 *
 * @package App\Models
 */
class MuinasPersonnotice extends Model
{
	protected $table = 'muinas_personnotice';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'person' => 'int'
	];
}
