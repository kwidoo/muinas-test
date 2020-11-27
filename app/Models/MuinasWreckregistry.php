<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWreckregistry
 * 
 * @property int $id
 * @property Carbon $inserted
 * @property string $dating
 * @property string $buildyear
 * @property string $wreckyear
 * @property string $address
 * @property string $maplink
 * @property string $gpsx
 * @property string $gpsy
 * @property int|null $gpshidden
 * @property int|null $ownerhidden
 * @property int|null $cargohidden
 * @property string $archivelink
 * @property string $sagalinks
 * @property string $status
 * @property int $monument
 * @property int|null $purpose
 * @property int|null $poweringmethod
 * @property int|null $vesseltype
 * @property int|null $county
 * @property int|null $parish
 * @property string $owner
 * @property string $externalregistrys
 * @property bool|null $found
 * @property bool|null $public
 * @property int|null $countryoforigin
 * 
 * @property MuinasClassificator|null $muinas_classificator
 *
 * @package App\Models
 */
class MuinasWreckregistry extends Model
{
	protected $table = 'muinas_wreckregistry';
	public $timestamps = false;

	protected $casts = [
		'gpshidden' => 'int',
		'ownerhidden' => 'int',
		'cargohidden' => 'int',
		'monument' => 'int',
		'purpose' => 'int',
		'poweringmethod' => 'int',
		'vesseltype' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'found' => 'bool',
		'public' => 'bool',
		'countryoforigin' => 'int'
	];

	protected $dates = [
		'inserted'
	];

	protected $fillable = [
		'inserted',
		'dating',
		'buildyear',
		'wreckyear',
		'address',
		'maplink',
		'gpsx',
		'gpsy',
		'gpshidden',
		'ownerhidden',
		'cargohidden',
		'archivelink',
		'sagalinks',
		'status',
		'monument',
		'purpose',
		'poweringmethod',
		'vesseltype',
		'county',
		'parish',
		'owner',
		'externalregistrys',
		'found',
		'public',
		'countryoforigin'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'countryoforigin');
	}
}
