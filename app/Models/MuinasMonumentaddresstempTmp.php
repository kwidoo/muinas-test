<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentaddresstempTmp
 * 
 * @property int $id
 * @property Carbon $modified
 * @property string $hash
 * @property int $monument
 * @property int $county
 * @property int $parish
 * @property string $county_title
 * @property string $parish_title
 * @property string $county_title_en
 * @property string $parish_title_en
 * @property string $address
 * @property bool $classified
 * @property Carbon $since
 * @property string $cohesion
 * @property int|null $addressid
 *
 * @package App\Models
 */
class MuinasMonumentaddresstempTmp extends Model
{
	protected $table = 'muinas_monumentaddresstemp_tmp';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'classified' => 'bool',
		'addressid' => 'int'
	];

	protected $dates = [
		'modified',
		'since'
	];

	protected $fillable = [
		'modified',
		'hash',
		'monument',
		'county',
		'parish',
		'county_title',
		'parish_title',
		'county_title_en',
		'parish_title_en',
		'address',
		'classified',
		'since',
		'cohesion',
		'addressid'
	];
}
