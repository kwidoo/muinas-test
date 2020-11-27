<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOaiphmindex
 * 
 * @property int $id
 * @property string $class
 * @property int $pk
 * @property Carbon $created
 * @property Carbon $modified
 * @property Carbon|null $deleted
 * @property string $set
 *
 * @package App\Models
 */
class MuinasOaiphmindex extends Model
{
	protected $table = 'muinas_oaiphmindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'pk' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'deleted'
	];

	protected $fillable = [
		'id',
		'created',
		'modified',
		'deleted'
	];
}
