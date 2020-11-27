<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasImagebank
 * 
 * @property int $id
 * @property string $filename
 * @property string $mime
 * @property string $title
 * @property string $cropdata
 * @property Carbon|null $checked
 * @property string|null $info
 * @property Carbon|null $created
 * @property string|null $inserter
 * @property string|null $imageclass
 * @property Carbon|null $filedate
 * 
 * @property Collection|MuinasEvmbuildingimage[] $muinas_evmbuildingimages
 * @property Collection|MuinasHeritageimage[] $muinas_heritageimages
 * @property Collection|MuinasHeritageinspectionimage[] $muinas_heritageinspectionimages
 * @property Collection|MuinasObservationprotocolimage[] $muinas_observationprotocolimages
 *
 * @package App\Models
 */
class MuinasImagebank extends Model
{
	protected $table = 'muinas_imagebank';
	public $timestamps = false;

	protected $dates = [
		'checked',
		'created',
		'filedate'
	];

	protected $fillable = [
		'filename',
		'mime',
		'title',
		'cropdata',
		'checked',
		'info',
		'created',
		'inserter',
		'imageclass',
		'filedate'
	];

	public function muinas_evmbuildingimages()
	{
		return $this->hasMany(MuinasEvmbuildingimage::class, 'imagebank');
	}

	public function muinas_heritageimages()
	{
		return $this->hasMany(MuinasHeritageimage::class, 'imagebank');
	}

	public function muinas_heritageinspectionimages()
	{
		return $this->hasMany(MuinasHeritageinspectionimage::class, 'imagebank');
	}

	public function muinas_observationprotocolimages()
	{
		return $this->hasMany(MuinasObservationprotocolimage::class, 'imagebank');
	}
}
