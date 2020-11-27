<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoDraftCompiller
 * 
 * @property int $draft
 * @property int $compiller
 * 
 * @property MuinasPerson $muinas_person
 * @property MuinasProvisoDraft $muinas_proviso_draft
 *
 * @package App\Models
 */
class MuinasProvisoDraftCompiller extends Model
{
	protected $table = 'muinas_proviso_draft_compillers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'draft' => 'int',
		'compiller' => 'int'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'compiller');
	}

	public function muinas_proviso_draft()
	{
		return $this->belongsTo(MuinasProvisoDraft::class, 'draft');
	}
}
