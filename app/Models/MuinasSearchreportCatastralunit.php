<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportCatastralunit
 * 
 * @property int $searchreport
 * @property string $catastralunit
 * @property string $source
 * @property Carbon $stamp
 * 
 * @property MuinasSearchreport $muinas_searchreport
 *
 * @package App\Models
 */
class MuinasSearchreportCatastralunit extends Model
{
	protected $table = 'muinas_searchreport_catastralunit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int'
	];

	protected $dates = [
		'stamp'
	];

	protected $fillable = [
		'source',
		'stamp'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}
}
