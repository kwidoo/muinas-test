<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitdraftfile
 * 
 * @property int $workpermitdraft
 * @property int $filebank
 * @property string|null $title
 * @property int|null $person
 * @property Carbon $created
 * @property string $type
 *
 * @package App\Models
 */
class MuinasWorkpermitdraftfile extends Model
{
	protected $table = 'muinas_workpermitdraftfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'workpermitdraft' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'workpermitdraft',
		'filebank',
		'title',
		'person',
		'created',
		'type'
	];
}
