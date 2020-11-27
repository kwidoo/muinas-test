<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRehemajaoutbuilding
 * 
 * @property int $id
 * @property int $rehemaja
 * @property string $description
 * @property int|null $buildyear
 * @property int|null $buildyearend
 * @property string $buildyearmethod
 * @property string $comment
 * @property string $status
 * @property int $type
 * @property int|null $state
 * @property string $usage
 *
 * @package App\Models
 */
class MuinasRehemajaoutbuilding extends Model
{
	protected $table = 'muinas_rehemajaoutbuilding';
	public $timestamps = false;

	protected $casts = [
		'rehemaja' => 'int',
		'buildyear' => 'int',
		'buildyearend' => 'int',
		'type' => 'int',
		'state' => 'int'
	];

	protected $fillable = [
		'rehemaja',
		'description',
		'buildyear',
		'buildyearend',
		'buildyearmethod',
		'comment',
		'status',
		'type',
		'state',
		'usage'
	];
}
