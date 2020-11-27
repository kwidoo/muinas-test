<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationreportstatelog
 * 
 * @property int $id
 * @property int $grantapplicationreport
 * @property string|null $state
 * @property string $name
 * @property string $message
 * @property Carbon $created
 * 
 * @property MuinasGrantapplicationreport $muinas_grantapplicationreport
 *
 * @package App\Models
 */
class MuinasGrantapplicationreportstatelog extends Model
{
	protected $table = 'muinas_grantapplicationreportstatelog';
	public $timestamps = false;

	protected $casts = [
		'grantapplicationreport' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'grantapplicationreport',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_grantapplicationreport()
	{
		return $this->belongsTo(MuinasGrantapplicationreport::class, 'grantapplicationreport');
	}
}
