<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuildingfile
 * 
 * @property int $evmbuilding
 * @property int $filebank
 * @property string $title
 * @property int|null $person
 * @property Carbon $created
 * 
 * @property MuinasEvmbuilding $muinas_evmbuilding
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasEvmbuildingfile extends Model
{
	protected $table = 'muinas_evmbuildingfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'evmbuilding' => 'int',
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

	public function muinas_evmbuilding()
	{
		return $this->belongsTo(MuinasEvmbuilding::class, 'evmbuilding');
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
