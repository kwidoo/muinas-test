<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsresource
 * 
 * @property int $id
 * @property string $name
 * @property string $comment
 * @property string|null $type
 * @property string $resourcetype
 * @property string $status
 * @property Carbon|null $created
 * @property Carbon $modified
 * @property int $creater
 *
 * @package App\Models
 */
class MuinasSnsresource extends Model
{
	protected $table = 'muinas_snsresource';
	public $timestamps = false;

	protected $casts = [
		'creater' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'name',
		'comment',
		'type',
		'resourcetype',
		'status',
		'created',
		'modified',
		'creater'
	];
}
