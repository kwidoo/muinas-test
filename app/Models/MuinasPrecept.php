<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPrecept
 * 
 * @property int $id
 * @property string $addressee
 * @property int $person
 * @property string $monumentdata
 * @property int $monument
 * @property string $established
 * @property string $law
 * @property string $obligations
 * @property float $sum
 * @property float $eurosum
 * @property string $currency
 * @property string $warning
 * @property Carbon|null $firstdeadline
 * @property Carbon $created
 * @property string $place
 * @property int $preparer
 * @property string $status
 * @property string|null $oldfields
 * @property string $comment
 * @property int|null $state
 * @property string|null $statedescription
 * @property Carbon|null $adminnotice
 * 
 * @property MuinasClassificator|null $muinas_classificator
 * @property Collection|MuinasPreceptmuinasobject[] $muinas_preceptmuinasobjects
 * @property Collection|MuinasPreceptownerperson[] $muinas_preceptownerpeople
 *
 * @package App\Models
 */
class MuinasPrecept extends Model
{
	protected $table = 'muinas_precept';
	public $timestamps = false;

	protected $casts = [
		'person' => 'int',
		'monument' => 'int',
		'sum' => 'float',
		'eurosum' => 'float',
		'preparer' => 'int',
		'state' => 'int'
	];

	protected $dates = [
		'firstdeadline',
		'created',
		'adminnotice'
	];

	protected $fillable = [
		'addressee',
		'person',
		'monumentdata',
		'monument',
		'established',
		'law',
		'obligations',
		'sum',
		'eurosum',
		'currency',
		'warning',
		'firstdeadline',
		'created',
		'place',
		'preparer',
		'status',
		'oldfields',
		'comment',
		'state',
		'statedescription',
		'adminnotice'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'state');
	}

	public function muinas_preceptmuinasobjects()
	{
		return $this->hasMany(MuinasPreceptmuinasobject::class, 'precept');
	}

	public function muinas_preceptownerpeople()
	{
		return $this->hasMany(MuinasPreceptownerperson::class, 'precept');
	}
}
