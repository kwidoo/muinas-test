<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasTranslation
 * 
 * @property int $marker
 * @property string $locale
 * @property string|null $value
 * @property Carbon|null $modified
 *
 * @package App\Models
 */
class MuinasTranslation extends Model
{
	protected $table = 'muinas_translation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'marker' => 'int'
	];

	protected $dates = [
		'modified'
	];

	protected $fillable = [
		'value',
		'modified'
	];
}
