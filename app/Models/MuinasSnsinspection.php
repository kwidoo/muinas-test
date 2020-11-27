<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsinspection
 * 
 * @property int $id
 * @property int|null $snsitem
 * @property string $number
 * @property Carbon|null $inspected
 * @property string $inspector
 * @property string $locationdescription
 * @property int|null $maplink
 * @property string $dimension
 * @property int|null $diagram
 * @property int|null $mapposition
 * @property string $relief
 * @property string $flora
 * @property string $virgintree
 * @property string $fauna
 * @property string $stonepool
 * @property string $waterbody
 * @property string $gift
 * @property string $solitaryactivity
 * @property int|null $placestate
 * @property int|null $recoverability
 * @property string $comment
 * @property string $archaeologicalobservation
 * @property int|null $creater
 * @property Carbon|null $created
 * @property Carbon|null $modified
 * @property string $status
 *
 * @package App\Models
 */
class MuinasSnsinspection extends Model
{
	protected $table = 'muinas_snsinspection';
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'maplink' => 'int',
		'diagram' => 'int',
		'mapposition' => 'int',
		'placestate' => 'int',
		'recoverability' => 'int',
		'creater' => 'int'
	];

	protected $dates = [
		'inspected',
		'created',
		'modified'
	];

	protected $fillable = [
		'snsitem',
		'number',
		'inspected',
		'inspector',
		'locationdescription',
		'maplink',
		'dimension',
		'diagram',
		'mapposition',
		'relief',
		'flora',
		'virgintree',
		'fauna',
		'stonepool',
		'waterbody',
		'gift',
		'solitaryactivity',
		'placestate',
		'recoverability',
		'comment',
		'archaeologicalobservation',
		'creater',
		'created',
		'modified',
		'status'
	];
}
