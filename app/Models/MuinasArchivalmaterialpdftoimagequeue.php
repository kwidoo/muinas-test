<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasArchivalmaterialpdftoimagequeue
 * 
 * @property int $archivalmaterial
 *
 * @package App\Models
 */
class MuinasArchivalmaterialpdftoimagequeue extends Model
{
	protected $table = 'muinas_archivalmaterialpdftoimagequeue';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'archivalmaterial' => 'int'
	];

	protected $fillable = [
		'archivalmaterial'
	];
}
