<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationControl
 * 
 * @property int $id
 * @property int $grantapplication
 * @property int $inspector
 * @property string|null $control_values
 * @property Carbon|null $created
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasGrantapplicationControl extends Model
{
	protected $table = 'muinas_grantapplication_control';
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'inspector' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'grantapplication',
		'inspector',
		'control_values',
		'created'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'inspector');
	}
}
