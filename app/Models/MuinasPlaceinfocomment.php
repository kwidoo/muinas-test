<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfocomment
 * 
 * @property int $id
 * @property int $placeinfo
 * @property string $lang
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $comment
 * @property string $status
 * @property Carbon $datetime
 * @property int $person
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasPlaceinfocomment extends Model
{
	protected $table = 'muinas_placeinfocomment';
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'datetime'
	];

	protected $fillable = [
		'placeinfo',
		'lang',
		'name',
		'email',
		'phone',
		'comment',
		'status',
		'datetime',
		'person'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
