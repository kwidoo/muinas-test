<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitapplicationfile
 * 
 * @property int $workpermitapplication
 * @property int $filebank
 * @property string|null $title
 * @property int|null $person
 * @property Carbon $created
 * @property string $type
 *
 * @package App\Models
 */
class MuinasWorkpermitapplicationfile extends Model
{
	protected $table = 'muinas_workpermitapplicationfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'workpermitapplication' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'workpermitapplication',
		'filebank',
		'title',
		'person',
		'created',
		'type'
	];
}
