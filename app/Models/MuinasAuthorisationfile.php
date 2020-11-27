<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisationfile
 * 
 * @property int $authorisation
 * @property int $filebank
 * @property string $title
 * @property string|null $type
 * @property Carbon|null $created
 * @property int|null $person
 * 
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasAuthorisationfile extends Model
{
	protected $table = 'muinas_authorisationfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'authorisation' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'type',
		'created',
		'person'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
