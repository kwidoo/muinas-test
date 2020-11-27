<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWreckregistryvideo
 * 
 * @property int $id
 * @property int $wreckregistry
 * @property string|null $link
 * @property string $description
 * @property string $status
 * @property string $filename
 *
 * @package App\Models
 */
class MuinasWreckregistryvideo extends Model
{
	protected $table = 'muinas_wreckregistryvideo';
	public $timestamps = false;

	protected $casts = [
		'wreckregistry' => 'int'
	];

	protected $fillable = [
		'wreckregistry',
		'link',
		'description',
		'status',
		'filename'
	];
}
