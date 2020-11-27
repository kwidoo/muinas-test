<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationinternalfile
 * 
 * @property int $grantapplication
 * @property int $filebank
 * @property string $title
 * @property string $type
 * @property int|null $person
 * @property Carbon $created
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasGrantapplicationinternalfile extends Model
{
	protected $table = 'muinas_grantapplicationinternalfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'type',
		'person',
		'created'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
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
