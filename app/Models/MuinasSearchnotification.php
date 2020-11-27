<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchnotification
 * 
 * @property int $id
 * @property int|null $number
 * @property string|null $comment
 * @property Carbon|null $created
 * @property string|null $state
 * @property Carbon|null $modified
 * @property int|null $pdf
 * @property string|null $lang
 * @property int|null $creater
 * @property int|null $person
 * @property string|null $message
 * @property int|null $repaired
 * @property string|null $adminstate
 * @property Carbon|null $submitted
 * @property int|null $authorisation
 * 
 * @property MuinasAuthorisation|null $muinas_authorisation
 * @property Collection|MuinasSearchreport[] $muinas_searchreports
 *
 * @package App\Models
 */
class MuinasSearchnotification extends Model
{
	protected $table = 'muinas_searchnotification';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'pdf' => 'int',
		'creater' => 'int',
		'person' => 'int',
		'repaired' => 'int',
		'authorisation' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'submitted'
	];

	protected $fillable = [
		'number',
		'comment',
		'created',
		'state',
		'modified',
		'pdf',
		'lang',
		'creater',
		'person',
		'message',
		'repaired',
		'adminstate',
		'submitted',
		'authorisation'
	];

	public function muinas_authorisation()
	{
		return $this->belongsTo(MuinasAuthorisation::class, 'authorisation');
	}

	public function muinas_searchreports()
	{
		return $this->hasMany(MuinasSearchreport::class, 'searchnotification');
	}
}
