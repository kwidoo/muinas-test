<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticecompetencecertificate
 * 
 * @property int $id
 * @property int $citizendivenotice
 * @property int $competencecertificate
 * 
 * @property MuinasCitizendivenotice $muinas_citizendivenotice
 * @property MuinasActivitylicence $muinas_activitylicence
 *
 * @package App\Models
 */
class MuinasCitizendivenoticecompetencecertificate extends Model
{
	protected $table = 'muinas_citizendivenoticecompetencecertificate';
	public $timestamps = false;

	protected $casts = [
		'citizendivenotice' => 'int',
		'competencecertificate' => 'int'
	];

	protected $fillable = [
		'citizendivenotice',
		'competencecertificate'
	];

	public function muinas_citizendivenotice()
	{
		return $this->belongsTo(MuinasCitizendivenotice::class, 'citizendivenotice');
	}

	public function muinas_activitylicence()
	{
		return $this->belongsTo(MuinasActivitylicence::class, 'competencecertificate');
	}
}
