<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportstatelog
 * 
 * @property int $id
 * @property int $searchreport
 * @property string $state
 * @property string|null $name
 * @property string|null $message
 * @property Carbon|null $created
 * 
 * @property MuinasSearchreport $muinas_searchreport
 *
 * @package App\Models
 */
class MuinasSearchreportstatelog extends Model
{
	protected $table = 'muinas_searchreportstatelog';
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'searchreport',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}
}
