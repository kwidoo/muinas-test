<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationreportdeadline
 * 
 * @property int $pypapplication
 * @property Carbon $reportdeadline
 * @property Carbon|null $notice
 * 
 * @property MuinasPypapplication $muinas_pypapplication
 *
 * @package App\Models
 */
class MuinasPypapplicationreportdeadline extends Model
{
	protected $table = 'muinas_pypapplicationreportdeadline';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pypapplication' => 'int'
	];

	protected $dates = [
		'reportdeadline',
		'notice'
	];

	protected $fillable = [
		'notice'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'pypapplication');
	}
}
