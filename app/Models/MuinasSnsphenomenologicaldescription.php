<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsphenomenologicaldescription
 * 
 * @property int $id
 * @property int|null $snsitem
 * @property bool|null $mood
 * @property string $mooddescription
 * @property bool|null $anomaly
 * @property string $anomalydescription
 * @property string $comment
 * @property bool|null $done
 * @property Carbon|null $created
 * @property int|null $creater
 * @property Carbon|null $modified
 * @property string $status
 * @property int|null $oldcounty
 * @property int|null $oldparish
 * @property int|null $county
 * @property int|null $parish
 *
 * @package App\Models
 */
class MuinasSnsphenomenologicaldescription extends Model
{
	protected $table = 'muinas_snsphenomenologicaldescription';
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'mood' => 'bool',
		'anomaly' => 'bool',
		'done' => 'bool',
		'creater' => 'int',
		'oldcounty' => 'int',
		'oldparish' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'snsitem',
		'mood',
		'mooddescription',
		'anomaly',
		'anomalydescription',
		'comment',
		'done',
		'created',
		'creater',
		'modified',
		'status',
		'oldcounty',
		'oldparish',
		'county',
		'parish'
	];
}
