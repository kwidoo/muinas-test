<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceBusinessesNote
 * 
 * @property int $id
 * @property int|null $activitylicence
 * @property string|null $note
 * @property int|null $person
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasActivitylicenceBusinessesNote extends Model
{
	protected $table = 'muinas_activitylicence_businesses_notes';
	public $timestamps = false;

	protected $casts = [
		'activitylicence' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'activitylicence',
		'note',
		'person',
		'created'
	];
}
