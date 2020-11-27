<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalmapplace
 * 
 * @property int $id
 * @property int $approval
 * @property string|null $title
 * @property string|null $address
 * @property string|null $cadastrals
 * @property Carbon|null $date
 * @property Carbon|null $enddate
 * @property string|null $type
 * @property int|null $staticmapimage
 * @property Carbon|null $coordinatesupdated
 *
 * @package App\Models
 */
class MuinasApprovalmapplace extends Model
{
	protected $table = 'muinas_approvalmapplace';
	public $timestamps = false;

	protected $casts = [
		'approval' => 'int',
		'staticmapimage' => 'int'
	];

	protected $dates = [
		'date',
		'enddate',
		'coordinatesupdated'
	];

	protected $fillable = [
		'approval',
		'title',
		'address',
		'cadastrals',
		'date',
		'enddate',
		'type',
		'staticmapimage',
		'coordinatesupdated'
	];
}
