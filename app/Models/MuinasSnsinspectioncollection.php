<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsinspectioncollection
 * 
 * @property int $snsinspection
 * @property int $collection
 *
 * @package App\Models
 */
class MuinasSnsinspectioncollection extends Model
{
	protected $table = 'muinas_snsinspectioncollection';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsinspection' => 'int',
		'collection' => 'int'
	];
}
