<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsplace
 * 
 * @property int $id
 * @property int|null $parent
 * @property string $parentclass
 * @property string $name
 * @property string $toponym
 * @property int|null $snsitem
 * @property string|null $eracode
 * @property int|null $placeinfo
 * @property string $security
 * @property string $comment
 * @property int|null $oldcounty
 * @property int|null $oldparish
 * @property string $oldparish2
 * @property int|null $county
 * @property int|null $parish
 * @property string $oldvillage
 * @property string $farm
 * @property string $village
 * @property float|null $gpsx
 * @property float|null $gpsy
 * @property string $other
 * @property string $status
 * @property int|null $mood
 * @property string $mooddescription
 * @property int|null $anomaly
 * @property string $anomalydescription
 * @property bool|null $phenomenondone
 * @property string $codercomment
 *
 * @package App\Models
 */
class MuinasSnsplace extends Model
{
	protected $table = 'muinas_snsplace';
	public $timestamps = false;

	protected $casts = [
		'parent' => 'int',
		'snsitem' => 'int',
		'placeinfo' => 'int',
		'oldcounty' => 'int',
		'oldparish' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'gpsx' => 'float',
		'gpsy' => 'float',
		'mood' => 'int',
		'anomaly' => 'int',
		'phenomenondone' => 'bool'
	];

	protected $fillable = [
		'parent',
		'parentclass',
		'name',
		'toponym',
		'snsitem',
		'eracode',
		'placeinfo',
		'security',
		'comment',
		'oldcounty',
		'oldparish',
		'oldparish2',
		'county',
		'parish',
		'oldvillage',
		'farm',
		'village',
		'gpsx',
		'gpsy',
		'other',
		'status',
		'mood',
		'mooddescription',
		'anomaly',
		'anomalydescription',
		'phenomenondone',
		'codercomment'
	];
}
