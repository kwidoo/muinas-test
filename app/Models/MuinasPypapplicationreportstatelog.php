<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationreportstatelog
 * 
 * @property int $id
 * @property int $pypapplicationreport
 * @property string|null $state
 * @property string $name
 * @property string $message
 * @property Carbon $created
 * 
 * @property MuinasPypapplicationreport $muinas_pypapplicationreport
 *
 * @package App\Models
 */
class MuinasPypapplicationreportstatelog extends Model
{
	protected $table = 'muinas_pypapplicationreportstatelog';
	public $timestamps = false;

	protected $casts = [
		'pypapplicationreport' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'pypapplicationreport',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_pypapplicationreport()
	{
		return $this->belongsTo(MuinasPypapplicationreport::class, 'pypapplicationreport');
	}
}
