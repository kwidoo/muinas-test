<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsitem
 * 
 * @property int $id
 * @property string $name
 * @property string $toponym
 * @property string $lpcode
 * @property int|null $complex
 * @property string $coder
 * @property string $comment
 * @property int|null $oldcounty
 * @property int|null $oldparish
 * @property string $oldvillage
 * @property string $farm
 * @property int|null $county
 * @property int|null $parish
 * @property string $village
 * @property string $locationother
 * @property string $locationdescription
 * @property int|null $maplink
 * @property string $status
 * @property int|null $creater
 * @property Carbon|null $created
 * @property Carbon|null $modified
 * @property float|null $lng
 * @property float|null $lat
 * @property bool|null $public
 * @property int|null $promoimage
 *
 * @package App\Models
 */
class MuinasSnsitem extends Model
{
	protected $table = 'muinas_snsitem';
	public $timestamps = false;

	protected $casts = [
		'complex' => 'int',
		'oldcounty' => 'int',
		'oldparish' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'maplink' => 'int',
		'creater' => 'int',
		'lng' => 'float',
		'lat' => 'float',
		'public' => 'bool',
		'promoimage' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'name',
		'toponym',
		'lpcode',
		'complex',
		'coder',
		'comment',
		'oldcounty',
		'oldparish',
		'oldvillage',
		'farm',
		'county',
		'parish',
		'village',
		'locationother',
		'locationdescription',
		'maplink',
		'status',
		'creater',
		'created',
		'modified',
		'lng',
		'lat',
		'public',
		'promoimage'
	];
}
