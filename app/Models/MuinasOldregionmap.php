<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOldregionmap
 * 
 * @property int $id
 * @property string $short
 * @property string $title
 * @property string $german
 * @property float $area
 * @property int $classifier
 * @property string $labellat
 * @property string $labellng
 * @property bool $level
 *
 * @package App\Models
 */
class MuinasOldregionmap extends Model
{
	protected $table = 'muinas_oldregionmap';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'area' => 'float',
		'classifier' => 'int',
		'level' => 'bool'
	];

	protected $fillable = [
		'short',
		'title',
		'german',
		'area',
		'classifier',
		'labellat',
		'labellng',
		'level'
	];
}
