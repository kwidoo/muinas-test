<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportUpdate
 * 
 * @property int $id
 * @property int $searchreport
 * @property string|null $type
 * @property string $message
 * @property Carbon $created
 * 
 * @property MuinasSearchreport $muinas_searchreport
 *
 * @package App\Models
 */
class MuinasSearchreportUpdate extends Model
{
	protected $table = 'muinas_searchreport_update';
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'searchreport',
		'type',
		'message',
		'created'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}
}
