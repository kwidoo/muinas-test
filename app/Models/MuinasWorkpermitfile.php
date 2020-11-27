<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitfile
 * 
 * @property int $workpermit
 * @property int $filebank
 * @property string|null $title
 * @property int|null $person
 * @property Carbon $created
 * @property string $type
 *
 * @package App\Models
 */
class MuinasWorkpermitfile extends Model
{
	protected $table = 'muinas_workpermitfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'workpermit' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'workpermit',
		'filebank',
		'title',
		'person',
		'created',
		'type'
	];
}
