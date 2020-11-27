<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasArchitecture
 * 
 * @property int $id
 * @property string $title
 * @property string $address
 * @property string $datingdecade
 * @property string $datingyear
 * @property string $author
 * @property bool|null $milieuarea
 * @property string $exinfo
 * @property string|null $fileext
 * @property Carbon $created
 * @property string $status
 * @property int $person
 * @property int|null $dating
 * @property int|null $usage
 * @property int|null $condition
 * @property int|null $monument
 * @property int|null $county
 * @property int|null $parish
 *
 * @package App\Models
 */
class MuinasArchitecture extends Model
{
	protected $table = 'muinas_architecture';
	public $timestamps = false;

	protected $casts = [
		'milieuarea' => 'bool',
		'person' => 'int',
		'dating' => 'int',
		'usage' => 'int',
		'condition' => 'int',
		'monument' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'address',
		'datingdecade',
		'datingyear',
		'author',
		'milieuarea',
		'exinfo',
		'fileext',
		'created',
		'status',
		'person',
		'dating',
		'usage',
		'condition',
		'monument',
		'county',
		'parish'
	];
}
