<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationcontractfile
 * 
 * @property int $pypapplication
 * @property int $filebank
 * @property string $title
 * @property int|null $person
 * @property Carbon $created
 * 
 * @property MuinasPypapplication $muinas_pypapplication
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasPypapplicationcontractfile extends Model
{
	protected $table = 'muinas_pypapplicationcontractfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pypapplication' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'person',
		'created'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'pypapplication');
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
