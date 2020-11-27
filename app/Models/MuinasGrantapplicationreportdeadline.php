<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationreportdeadline
 * 
 * @property int $grantapplication
 * @property Carbon $reportdeadline
 * @property Carbon|null $notice
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 *
 * @package App\Models
 */
class MuinasGrantapplicationreportdeadline extends Model
{
	protected $table = 'muinas_grantapplicationreportdeadline';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int'
	];

	protected $dates = [
		'reportdeadline',
		'notice'
	];

	protected $fillable = [
		'notice'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}
}
