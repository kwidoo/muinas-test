<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoDraft
 * 
 * @property int $id
 * @property int|null $proviso_id
 * @property int|null $person_id
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property int|null $compiler
 * 
 * @property Collection|MuinasProvisoDraftCompiller[] $muinas_proviso_draft_compillers
 *
 * @package App\Models
 */
class MuinasProvisoDraft extends Model
{
	protected $table = 'muinas_proviso_draft';
	public $timestamps = false;

	protected $casts = [
		'proviso_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int',
		'compiler' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'proviso_id',
		'person_id',
		'created',
		'status',
		'type',
		'compiler'
	];

	public function muinas_proviso_draft_compillers()
	{
		return $this->hasMany(MuinasProvisoDraftCompiller::class, 'draft');
	}
}
