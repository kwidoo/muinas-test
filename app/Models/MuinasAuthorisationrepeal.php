<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisationrepeal
 * 
 * @property string $filetitle
 * @property string $filename
 * @property Carbon $repealed
 *
 * @package App\Models
 */
class MuinasAuthorisationrepeal extends Model
{
	protected $table = 'muinas_authorisationrepeal';
	protected $primaryKey = 'filename';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'repealed'
	];

	protected $fillable = [
		'filetitle',
		'repealed'
	];
}
