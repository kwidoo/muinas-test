<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivenoticecompetencecertificate
 * 
 * @property int $id
 * @property int $divenotice
 * @property int $competencecertificate
 * 
 * @property MuinasDivenotice $muinas_divenotice
 * @property MuinasActivitylicence $muinas_activitylicence
 *
 * @package App\Models
 */
class MuinasDivenoticecompetencecertificate extends Model
{
	protected $table = 'muinas_divenoticecompetencecertificate';
	public $timestamps = false;

	protected $casts = [
		'divenotice' => 'int',
		'competencecertificate' => 'int'
	];

	protected $fillable = [
		'divenotice',
		'competencecertificate'
	];

	public function muinas_divenotice()
	{
		return $this->belongsTo(MuinasDivenotice::class, 'divenotice');
	}

	public function muinas_activitylicence()
	{
		return $this->belongsTo(MuinasActivitylicence::class, 'competencecertificate');
	}
}
