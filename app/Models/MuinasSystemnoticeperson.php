<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSystemnoticeperson
 * 
 * @property int $systemnotice
 * @property int $person
 * @property string|null $status
 * 
 * @property MuinasSystemnotice $muinas_systemnotice
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasSystemnoticeperson extends Model
{
	protected $table = 'muinas_systemnoticeperson';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'systemnotice' => 'int',
		'person' => 'int'
	];

	protected $fillable = [
		'status'
	];

	public function muinas_systemnotice()
	{
		return $this->belongsTo(MuinasSystemnotice::class, 'systemnotice');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
