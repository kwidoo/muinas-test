<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoanoticeindex
 * 
 * @property int $placeinfoanotice
 * @property string $field
 * @property string $value
 * 
 * @property MuinasPlaceinfoanotice $muinas_placeinfoanotice
 *
 * @package App\Models
 */
class MuinasPlaceinfoanoticeindex extends Model
{
	protected $table = 'muinas_placeinfoanoticeindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfoanotice' => 'int'
	];

	protected $fillable = [
		'value'
	];

	public function muinas_placeinfoanotice()
	{
		return $this->belongsTo(MuinasPlaceinfoanotice::class, 'placeinfoanotice');
	}
}
