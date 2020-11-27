<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasTranslationmarkerdeleted
 * 
 * @property string $path
 * @property Carbon|null $date
 *
 * @package App\Models
 */
class MuinasTranslationmarkerdeleted extends Model
{
	protected $table = 'muinas_translationmarkerdeleted';
	protected $primaryKey = 'path';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'date'
	];
}
