<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasBurialplace
 * 
 * @property int $id
 * @property string $title
 * @property Carbon|null $buried
 * @property string $borndead
 * @property string $country
 * @property string $city
 * @property string $graveyard
 * @property string $graveaddress
 * @property string $owner
 * @property string $description
 * @property Carbon|null $created
 * @property Carbon|null $modified
 * @property Carbon|null $duedate
 * @property string $status
 * @property int|null $monument
 * @property int|null $ownerperson
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasBurialplace extends Model
{
	protected $table = 'muinas_burialplace';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'ownerperson' => 'int'
	];

	protected $dates = [
		'buried',
		'created',
		'modified',
		'duedate'
	];

	protected $fillable = [
		'title',
		'buried',
		'borndead',
		'country',
		'city',
		'graveyard',
		'graveaddress',
		'owner',
		'description',
		'created',
		'modified',
		'duedate',
		'status',
		'monument',
		'ownerperson'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
