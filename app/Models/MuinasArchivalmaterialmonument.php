<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasArchivalmaterialmonument
 * 
 * @property int $monument
 * @property int $archivalmaterial
 *
 * @package App\Models
 */
class MuinasArchivalmaterialmonument extends Model
{
	protected $table = 'muinas_archivalmaterialmonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'archivalmaterial' => 'int'
	];
}
