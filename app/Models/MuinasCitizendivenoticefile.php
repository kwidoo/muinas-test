<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticefile
 * 
 * @property int $id
 * @property int $citizendivenotice
 * @property string $title
 * @property int|null $person
 * @property string|null $type
 * @property int $filebank
 * @property Carbon $created
 * @property int|null $disabled
 *
 * @package App\Models
 */
class MuinasCitizendivenoticefile extends Model
{
	protected $table = 'muinas_citizendivenoticefile';
	public $timestamps = false;

	protected $casts = [
		'citizendivenotice' => 'int',
		'person' => 'int',
		'filebank' => 'int',
		'disabled' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'citizendivenotice',
		'title',
		'person',
		'type',
		'filebank',
		'created',
		'disabled'
	];
}
