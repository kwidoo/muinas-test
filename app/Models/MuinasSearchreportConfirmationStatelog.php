<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportConfirmationStatelog
 * 
 * @property int $id
 * @property int $searchreport_confirmation
 * @property string|null $state
 * @property string $name
 * @property string $message
 * @property Carbon $created
 * 
 * @property MuinasSearchreportConfirmation $muinas_searchreport_confirmation
 *
 * @package App\Models
 */
class MuinasSearchreportConfirmationStatelog extends Model
{
	protected $table = 'muinas_searchreport_confirmation_statelog';
	public $timestamps = false;

	protected $casts = [
		'searchreport_confirmation' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'searchreport_confirmation',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_searchreport_confirmation()
	{
		return $this->belongsTo(MuinasSearchreportConfirmation::class, 'searchreport_confirmation');
	}
}
