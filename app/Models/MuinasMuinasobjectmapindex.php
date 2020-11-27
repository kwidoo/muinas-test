<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMuinasobjectmapindex
 * 
 * @property int $muinasobject
 * @property float $x
 * @property float $y
 * @property string|null $jsoncache
 * @property string|null $jsoncacheen
 * @property string|null $jsoncacheadmin
 * @property point|null $point
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 *
 * @package App\Models
 */
class MuinasMuinasobjectmapindex extends Model
{
	protected $table = 'muinas_muinasobjectmapindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'x' => 'float',
		'y' => 'float',
		'point' => 'point'
	];

	protected $fillable = [
		'muinasobject',
		'x',
		'y',
		'jsoncache',
		'jsoncacheen',
		'jsoncacheadmin',
		'point'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}
}
