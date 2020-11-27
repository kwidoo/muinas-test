<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAdsobject
 * 
 * @property string $oid
 * @property int $adobid
 * @property string|null $immovabledata
 * @property string $address
 * @property int|null $priority
 * @property Carbon|null $updated
 * @property string $status
 *
 * @package App\Models
 */
class MuinasAdsobject extends Model
{
	protected $table = 'muinas_adsobject';
	protected $primaryKey = 'oid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'adobid' => 'int',
		'priority' => 'int'
	];

	protected $dates = [
		'updated'
	];

	protected $fillable = [
		'adobid',
		'immovabledata',
		'address',
		'priority',
		'updated',
		'status'
	];
}
