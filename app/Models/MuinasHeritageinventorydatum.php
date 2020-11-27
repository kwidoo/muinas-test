<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageinventorydatum
 * 
 * @property int $heritageinventory
 * @property string $field
 * @property string $value
 * 
 * @property MuinasHeritageinventory $muinas_heritageinventory
 *
 * @package App\Models
 */
class MuinasHeritageinventorydatum extends Model
{
	protected $table = 'muinas_heritageinventorydata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritageinventory' => 'int'
	];

	protected $fillable = [
		'heritageinventory',
		'field',
		'value'
	];

	public function muinas_heritageinventory()
	{
		return $this->belongsTo(MuinasHeritageinventory::class, 'heritageinventory');
	}
}
