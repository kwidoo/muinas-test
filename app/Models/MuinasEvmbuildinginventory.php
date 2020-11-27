<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuildinginventory
 * 
 * @property int $id
 * @property int $evmbuilding
 * @property string $description
 * @property Carbon $date
 * @property int|null $inventorier
 * @property int|null $state
 * 
 * @property MuinasEvmbuilding $muinas_evmbuilding
 * @property MuinasClassificator|null $muinas_classificator
 *
 * @package App\Models
 */
class MuinasEvmbuildinginventory extends Model
{
	protected $table = 'muinas_evmbuildinginventory';
	public $timestamps = false;

	protected $casts = [
		'evmbuilding' => 'int',
		'inventorier' => 'int',
		'state' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'evmbuilding',
		'description',
		'date',
		'inventorier',
		'state'
	];

	public function muinas_evmbuilding()
	{
		return $this->belongsTo(MuinasEvmbuilding::class, 'evmbuilding');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'state');
	}
}
