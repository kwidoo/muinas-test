<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMuinasobjectaddress
 * 
 * @property int $id
 * @property int $muinasobject
 * @property string|null $objecttype
 * @property int $objectid
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
 * @property Carbon|null $modified
 *
 * @package App\Models
 */
class MuinasMuinasobjectaddress extends Model
{
	protected $table = 'muinas_muinasobjectaddress';
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'objectid' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'classified' => 'bool',
		'addressid' => 'int'
	];

	protected $dates = [
		'since',
		'modified'
	];

	protected $fillable = [
		'muinasobject',
		'objecttype',
		'objectid',
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
		'addressid',
		'modified'
	];
}
