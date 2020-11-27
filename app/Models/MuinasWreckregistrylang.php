<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWreckregistrylang
 * 
 * @property int $wreckregistry
 * @property string $lang
 * @property string $name
 * @property string $history
 * @property string $cargo
 * @property string $wreckstory
 * @property string $objectdata
 * @property string $material
 * @property string $locationdescription
 * @property string $resourceliterature
 * @property string $discovertime
 * @property string $discoverer
 * @property string $discoversituation
 * @property string $discoverresearch
 * @property string $comment
 * @property string $owner
 * @property string $dating
 * @property string $address
 * @property string $countryoforigin
 *
 * @package App\Models
 */
class MuinasWreckregistrylang extends Model
{
	protected $table = 'muinas_wreckregistrylang';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wreckregistry' => 'int'
	];

	protected $fillable = [
		'name',
		'history',
		'cargo',
		'wreckstory',
		'objectdata',
		'material',
		'locationdescription',
		'resourceliterature',
		'discovertime',
		'discoverer',
		'discoversituation',
		'discoverresearch',
		'comment',
		'owner',
		'dating',
		'address',
		'countryoforigin'
	];
}
