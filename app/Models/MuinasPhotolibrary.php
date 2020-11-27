<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPhotolibrary
 * 
 * @property int $id
 * @property string $address
 * @property bool|null $unidentified
 * @property string $title
 * @property Carbon $created
 * @property Carbon|null $modified
 * @property string $status
 * @property int $county
 * @property int $parish
 * @property int $collectiontype
 * @property int|null $cmtype
 * @property float|null $gpsx
 * @property float|null $gpsy
 * 
 * @property Collection|MuinasPhotolibrarymuinasobject[] $muinas_photolibrarymuinasobjects
 *
 * @package App\Models
 */
class MuinasPhotolibrary extends Model
{
	protected $table = 'muinas_photolibrary';
	public $timestamps = false;

	protected $casts = [
		'unidentified' => 'bool',
		'county' => 'int',
		'parish' => 'int',
		'collectiontype' => 'int',
		'cmtype' => 'int',
		'gpsx' => 'float',
		'gpsy' => 'float'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'address',
		'unidentified',
		'title',
		'created',
		'modified',
		'status',
		'county',
		'parish',
		'collectiontype',
		'cmtype',
		'gpsx',
		'gpsy'
	];

	public function muinas_photolibrarymuinasobjects()
	{
		return $this->hasMany(MuinasPhotolibrarymuinasobject::class, 'photolibrary');
	}
}
