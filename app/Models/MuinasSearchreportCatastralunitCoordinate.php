<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportCatastralunitCoordinate
 * 
 * @property int $id
 * @property int $searchreport
 * @property string $catastralunit
 * @property string $sourcetype
 * @property int $sourceid
 * @property Carbon $stamp
 * 
 * @property MuinasSearchreport $muinas_searchreport
 *
 * @package App\Models
 */
class MuinasSearchreportCatastralunitCoordinate extends Model
{
	protected $table = 'muinas_searchreport_catastralunit_coordinate';
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int',
		'sourceid' => 'int'
	];

	protected $dates = [
		'stamp'
	];

	protected $fillable = [
		'searchreport',
		'catastralunit',
		'sourcetype',
		'sourceid',
		'stamp'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}
}
