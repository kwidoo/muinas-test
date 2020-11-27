<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticedraftcomment
 * 
 * @property int $id
 * @property int|null $draft
 * @property int $person
 * @property string|null $ownerperson
 * @property string|null $message
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasWorknoticedraftcomment extends Model
{
	protected $table = 'muinas_worknoticedraftcomment';
	public $timestamps = false;

	protected $casts = [
		'draft' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'draft',
		'person',
		'ownerperson',
		'message',
		'created'
	];
}
