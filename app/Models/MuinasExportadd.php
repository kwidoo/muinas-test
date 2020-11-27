<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasExportadd
 * 
 * @property int $id
 * @property int|null $export
 * @property string|null $kncode
 * @property int $object_designation
 * @property string $name
 * @property string|null $maker
 * @property string|null $made
 * @property string|null $dimensions
 * @property string|null $invertorynumbers
 * @property string|null $other
 * @property string|null $materials
 * @property string|null $techniques
 * @property string|null $status
 * @property string|null $cultural_property_description
 * @property string|null $weight
 * @property string|null $price_estimation
 * @property string|null $maker_place
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasExportadd extends Model
{
	protected $table = 'muinas_exportadd';
	public $timestamps = false;

	protected $casts = [
		'export' => 'int',
		'object_designation' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'export',
		'kncode',
		'object_designation',
		'name',
		'maker',
		'made',
		'dimensions',
		'invertorynumbers',
		'other',
		'materials',
		'techniques',
		'status',
		'cultural_property_description',
		'weight',
		'price_estimation',
		'maker_place',
		'created'
	];
}
