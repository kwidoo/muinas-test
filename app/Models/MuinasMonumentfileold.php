<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentfileold
 * 
 * @property int $id
 * @property int $monument
 * @property Carbon $created
 * @property string $filetype
 * @property string $filename
 * @property string $type
 * @property string $status
 * @property string $fileext
 * @property string|null $url
 * @property bool|null $classified
 * @property string $title
 * @property Carbon|null $converted
 *
 * @package App\Models
 */
class MuinasMonumentfileold extends Model
{
	protected $table = 'muinas_monumentfileold';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'classified' => 'bool'
	];

	protected $dates = [
		'created',
		'converted'
	];

	protected $fillable = [
		'monument',
		'created',
		'filetype',
		'filename',
		'type',
		'status',
		'fileext',
		'url',
		'classified',
		'title',
		'converted'
	];
}
