<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsinspectiondiagram
 * 
 * @property int $snsinspection
 * @property int $resource
 *
 * @package App\Models
 */
class MuinasSnsinspectiondiagram extends Model
{
	protected $table = 'muinas_snsinspectiondiagram';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsinspection' => 'int',
		'resource' => 'int'
	];
}
