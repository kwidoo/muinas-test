<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMuinasobjectStatisticCmState
 * 
 * @property int $muinasobject
 * @property int|null $objecttype
 * @property int|null $cm_state
 * @property int|null $county
 * @property int|null $year
 * @property int|null $yearhalf
 * @property int|null $count
 * @property Carbon|null $modified
 * @property string|null $type
 * @property int|null $person
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasClassificator|null $muinas_classificator
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasMuinasobjectStatisticCmState extends Model
{
	protected $table = 'muinas_muinasobject_statistic_cm_state';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'objecttype' => 'int',
		'cm_state' => 'int',
		'county' => 'int',
		'year' => 'int',
		'yearhalf' => 'int',
		'count' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'modified'
	];

	protected $fillable = [
		'objecttype',
		'count',
		'modified'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'cm_state');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'county');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
