<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticecompetencecreportertificate
 * 
 * @property int $id
 * @property int $citizendivenoticereport
 * @property int $competencecertificate
 * 
 * @property MuinasCitizendivenoticereport $muinas_citizendivenoticereport
 *
 * @package App\Models
 */
class MuinasCitizendivenoticecompetencecreportertificate extends Model
{
	protected $table = 'muinas_citizendivenoticecompetencecreportertificate';
	public $timestamps = false;

	protected $casts = [
		'citizendivenoticereport' => 'int',
		'competencecertificate' => 'int'
	];

	protected $fillable = [
		'citizendivenoticereport',
		'competencecertificate'
	];

	public function muinas_citizendivenoticereport()
	{
		return $this->belongsTo(MuinasCitizendivenoticereport::class, 'citizendivenoticereport');
	}
}
