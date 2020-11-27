<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequeststatelog
 * 
 * @property int $id
 * @property int $searchapplicationrequest
 * @property string $state
 * @property string|null $name
 * @property string|null $message
 * @property Carbon $created
 * 
 * @property MuinasSearchapplicationrequest $muinas_searchapplicationrequest
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequeststatelog extends Model
{
	protected $table = 'muinas_searchapplicationrequeststatelog';
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequest' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'searchapplicationrequest',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_searchapplicationrequest()
	{
		return $this->belongsTo(MuinasSearchapplicationrequest::class, 'searchapplicationrequest');
	}
}
