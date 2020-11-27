<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasExportaddimage
 * 
 * @property int $exportadd
 * @property int $imagebank
 * @property string|null $description
 * @property int $position
 * @property int|null $disabled_version
 * @property int|null $version
 *
 * @package App\Models
 */
class MuinasExportaddimage extends Model
{
	protected $table = 'muinas_exportaddimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'exportadd' => 'int',
		'imagebank' => 'int',
		'position' => 'int',
		'disabled_version' => 'int',
		'version' => 'int'
	];

	protected $fillable = [
		'exportadd',
		'imagebank',
		'description',
		'position',
		'disabled_version',
		'version'
	];
}
