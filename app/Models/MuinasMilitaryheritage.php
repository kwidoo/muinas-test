<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMilitaryheritage
 * 
 * @property int $id
 * @property string $title
 * @property string $county
 * @property string $parish
 * @property string|null $address
 * @property string|null $catastralunit
 * @property string|null $coordinates
 * @property int|null $ownerperson
 * @property string $period
 * @property Carbon|null $dating
 * @property string|null $state
 * @property string|null $utilization
 * @property string|null $extra
 * @property string|null $fileext
 * @property string|null $status
 * @property string $lastuser
 * @property Carbon|null $lastedit
 *
 * @package App\Models
 */
class MuinasMilitaryheritage extends Model
{
	protected $table = 'muinas_militaryheritage';
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int'
	];

	protected $dates = [
		'dating',
		'lastedit'
	];

	protected $fillable = [
		'title',
		'county',
		'parish',
		'address',
		'catastralunit',
		'coordinates',
		'ownerperson',
		'period',
		'dating',
		'state',
		'utilization',
		'extra',
		'fileext',
		'status',
		'lastuser',
		'lastedit'
	];
}
