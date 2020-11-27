<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentfile
 * 
 * @property int $monument
 * @property int $filebank
 * @property string|null $title
 * @property string $type
 * @property bool|null $classified
 * @property int|null $person
 * @property Carbon $created
 * @property int|null $filetype
 * 
 * @property MuinasMonument $muinas_monument
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 * @property MuinasClassificator|null $muinas_classificator
 *
 * @package App\Models
 */
class MuinasMonumentfile extends Model
{
	protected $table = 'muinas_monumentfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'filebank' => 'int',
		'classified' => 'bool',
		'person' => 'int',
		'filetype' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'type',
		'classified',
		'person',
		'created',
		'filetype'
	];

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'filetype');
	}
}
