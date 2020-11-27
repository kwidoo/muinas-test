<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentinventorydatum
 * 
 * @property int $monumentinventory
 * @property string $field
 * @property string $value
 * 
 * @property MuinasMonumentinventory $muinas_monumentinventory
 *
 * @package App\Models
 */
class MuinasMonumentinventorydatum extends Model
{
	protected $table = 'muinas_monumentinventorydata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monumentinventory' => 'int'
	];

	protected $fillable = [
		'monumentinventory',
		'field',
		'value'
	];

	public function muinas_monumentinventory()
	{
		return $this->belongsTo(MuinasMonumentinventory::class, 'monumentinventory');
	}
}
