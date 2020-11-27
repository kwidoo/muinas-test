<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWargravepubliclog
 * 
 * @property int $id
 * @property int|null $wargrave
 * @property int|null $wargraveperson
 * @property string $pcode
 * @property string $type
 * @property string $name
 * @property Carbon $datetime
 * @property string $ip
 * @property string $session
 * @property string $filterdata
 * 
 * @property MuinasWargrave|null $muinas_wargrave
 * @property MuinasWargraveperson|null $muinas_wargraveperson
 *
 * @package App\Models
 */
class MuinasWargravepubliclog extends Model
{
	protected $table = 'muinas_wargravepubliclog';
	public $timestamps = false;

	protected $casts = [
		'wargrave' => 'int',
		'wargraveperson' => 'int'
	];

	protected $dates = [
		'datetime'
	];

	protected $fillable = [
		'wargrave',
		'wargraveperson',
		'pcode',
		'type',
		'name',
		'datetime',
		'ip',
		'session',
		'filterdata'
	];

	public function muinas_wargrave()
	{
		return $this->belongsTo(MuinasWargrave::class, 'wargrave');
	}

	public function muinas_wargraveperson()
	{
		return $this->belongsTo(MuinasWargraveperson::class, 'wargraveperson');
	}
}
