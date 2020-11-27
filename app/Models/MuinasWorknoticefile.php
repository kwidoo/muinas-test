<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticefile
 * 
 * @property int $worknotice
 * @property int $filebank
 * @property string|null $title
 * @property int|null $person
 * @property Carbon $created
 * @property string $type
 *
 * @package App\Models
 */
class MuinasWorknoticefile extends Model
{
	protected $table = 'muinas_worknoticefile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'worknotice' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'worknotice',
		'filebank',
		'title',
		'person',
		'created',
		'type'
	];
}
