<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnscomplex
 * 
 * @property int $id
 * @property string $type
 * @property string $name
 * @property int|null $snsitem
 * @property string $status
 * @property int|null $creater
 * @property Carbon|null $created
 * @property Carbon|null $modified
 * @property string $comment
 * @property int|null $oldcounty
 * @property int|null $oldparish
 * @property int|null $county
 * @property int|null $parish
 *
 * @package App\Models
 */
class MuinasSnscomplex extends Model
{
	protected $table = 'muinas_snscomplex';
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
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
		'type',
		'name',
		'snsitem',
		'status',
		'creater',
		'created',
		'modified',
		'comment',
		'oldcounty',
		'oldparish',
		'county',
		'parish'
	];
}
