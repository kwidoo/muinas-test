<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFindacceptactAddressCoordinate
 * 
 * @property int $id
 * @property int $findacceptact
 * @property string $address
 * @property string $sourcetype
 * @property int $sourceid
 * @property Carbon $stamp
 * 
 * @property MuinasFindacceptact $muinas_findacceptact
 *
 * @package App\Models
 */
class MuinasFindacceptactAddressCoordinate extends Model
{
	protected $table = 'muinas_findacceptact_address_coordinate';
	public $timestamps = false;

	protected $casts = [
		'findacceptact' => 'int',
		'sourceid' => 'int'
	];

	protected $dates = [
		'stamp'
	];

	protected $fillable = [
		'findacceptact',
		'address',
		'sourcetype',
		'sourceid',
		'stamp'
	];

	public function muinas_findacceptact()
	{
		return $this->belongsTo(MuinasFindacceptact::class, 'findacceptact');
	}
}
