<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMuinasobjectStatisticRelation
 * 
 * @property int $muinasobject
 * @property int $relation
 * @property int|null $county
 * @property int|null $year
 * @property int|null $yearhalf
 * @property int|null $count
 * @property Carbon|null $modified
 * @property string|null $type
 * @property string|null $relationtype
 * @property int|null $person
 * @property string|null $objecttype
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasMuinasobjectStatisticRelation extends Model
{
	protected $table = 'muinas_muinasobject_statistic_relation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'relation' => 'int',
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
		'count',
		'modified',
		'objecttype'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
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
