<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasNotice
 * 
 * @property int $id
 * @property int $pk
 * @property string $type
 * @property Carbon $created
 * @property string $status
 * @property int $person
 *
 * @package App\Models
 */
class MuinasNotice extends Model
{
	protected $table = 'muinas_notice';
	public $timestamps = false;

	protected $casts = [
		'pk' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'pk',
		'type',
		'created',
		'status',
		'person'
	];
}
