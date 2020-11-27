<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFindacceptactAddress
 * 
 * @property int $findacceptact
 * @property int $address
 * @property string $source
 * @property Carbon $stamp
 * 
 * @property MuinasFindacceptact $muinas_findacceptact
 * @property MuinasAddress $muinas_address
 *
 * @package App\Models
 */
class MuinasFindacceptactAddress extends Model
{
	protected $table = 'muinas_findacceptact_address';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'findacceptact' => 'int',
		'address' => 'int'
	];

	protected $dates = [
		'stamp'
	];

	protected $fillable = [
		'source',
		'stamp'
	];

	public function muinas_findacceptact()
	{
		return $this->belongsTo(MuinasFindacceptact::class, 'findacceptact');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
