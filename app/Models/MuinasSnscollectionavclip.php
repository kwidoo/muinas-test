<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnscollectionavclip
 * 
 * @property int $id
 * @property int|null $collection
 * @property string $info
 * @property Carbon|null $start
 * @property Carbon|null $end
 *
 * @package App\Models
 */
class MuinasSnscollectionavclip extends Model
{
	protected $table = 'muinas_snscollectionavclip';
	public $timestamps = false;

	protected $casts = [
		'collection' => 'int'
	];

	protected $dates = [
		'start',
		'end'
	];

	protected $fillable = [
		'collection',
		'info',
		'start',
		'end'
	];
}
