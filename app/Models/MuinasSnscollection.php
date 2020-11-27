<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnscollection
 * 
 * @property int $id
 * @property string $name
 * @property string $path
 * @property int|null $size
 * @property string $mimetype
 * @property string $ext
 * @property string $created
 * @property string $modified
 * @property string $metadata
 * @property string $type
 * @property string $info
 * @property Carbon $lastreaded
 * @property bool|null $deleted
 *
 * @package App\Models
 */
class MuinasSnscollection extends Model
{
	protected $table = 'muinas_snscollection';
	public $timestamps = false;

	protected $casts = [
		'size' => 'int',
		'deleted' => 'bool'
	];

	protected $dates = [
		'lastreaded'
	];

	protected $fillable = [
		'name',
		'path',
		'size',
		'mimetype',
		'ext',
		'created',
		'modified',
		'metadata',
		'type',
		'info',
		'lastreaded',
		'deleted'
	];
}
