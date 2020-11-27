<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequestfile
 * 
 * @property int $searchapplicationrequest
 * @property int $filebank
 * @property string $title
 * @property int|null $person
 * @property Carbon $created
 * @property int|null $type
 * 
 * @property MuinasSearchapplicationrequest $muinas_searchapplicationrequest
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequestfile extends Model
{
	protected $table = 'muinas_searchapplicationrequestfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequest' => 'int',
		'filebank' => 'int',
		'person' => 'int',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'person',
		'created',
		'type'
	];

	public function muinas_searchapplicationrequest()
	{
		return $this->belongsTo(MuinasSearchapplicationrequest::class, 'searchapplicationrequest');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
