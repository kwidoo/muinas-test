<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticedraftfile
 * 
 * @property int $worknoticedraft
 * @property int $filebank
 * @property string|null $title
 * @property int|null $person
 * @property Carbon $created
 * @property string $type
 *
 * @package App\Models
 */
class MuinasWorknoticedraftfile extends Model
{
	protected $table = 'muinas_worknoticedraftfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'worknoticedraft' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'worknoticedraft',
		'filebank',
		'title',
		'person',
		'created',
		'type'
	];
}
