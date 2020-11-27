<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasExportaddVersion
 * 
 * @property int $id
 * @property int|null $exportadd_id
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
 * @property string|null $changed_fields
 * @property int|null $version_number
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasExportaddVersion extends Model
{
	protected $table = 'muinas_exportadd_versions';
	public $timestamps = false;

	protected $casts = [
		'exportadd_id' => 'int',
		'export' => 'int',
		'object_designation' => 'int',
		'version_number' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'exportadd_id',
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
		'changed_fields',
		'version_number',
		'created'
	];
}
