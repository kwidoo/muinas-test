<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagefile
 * 
 * @property int $heritage
 * @property int $filebank
 * @property string $title
 * @property string $type
 * @property bool|null $classified
 * @property int|null $person
 * @property Carbon $created
 * @property int|null $filetype
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 * @property MuinasClassificator|null $muinas_classificator
 *
 * @package App\Models
 */
class MuinasHeritagefile extends Model
{
	protected $table = 'muinas_heritagefile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
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

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
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
