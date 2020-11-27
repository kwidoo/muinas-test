<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportfile
 * 
 * @property int $searchreport
 * @property int $filebank
 * @property string $title
 * @property int|null $person
 * @property Carbon $created
 * @property string|null $type
 * 
 * @property MuinasSearchreport $muinas_searchreport
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasSearchreportfile extends Model
{
	protected $table = 'muinas_searchreportfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int',
		'filebank' => 'int',
		'person' => 'int'
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

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
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
