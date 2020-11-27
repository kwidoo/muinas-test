<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicencerepeal
 * 
 * @property string $filetitle
 * @property string $filename
 * @property Carbon $repealed
 *
 * @package App\Models
 */
class MuinasActivitylicencerepeal extends Model
{
	protected $table = 'muinas_activitylicencerepeal';
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
