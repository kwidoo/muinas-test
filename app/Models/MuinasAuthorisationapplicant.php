<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisationapplicant
 * 
 * @property int $id
 * @property int $authorisation
 * @property int|null $applicant
 * @property string $type
 * @property string|null $field
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasAuthorisationapplicant extends Model
{
	protected $table = 'muinas_authorisationapplicant';
	public $timestamps = false;

	protected $casts = [
		'authorisation' => 'int',
		'applicant' => 'int'
	];

	protected $fillable = [
		'authorisation',
		'applicant',
		'type',
		'field'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'applicant');
	}
}
