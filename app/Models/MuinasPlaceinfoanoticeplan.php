<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoanoticeplan
 * 
 * @property int $placeinfoanotice
 * @property int $imagebank
 * @property string $description
 *
 * @package App\Models
 */
class MuinasPlaceinfoanoticeplan extends Model
{
	protected $table = 'muinas_placeinfoanoticeplan';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfoanotice' => 'int',
		'imagebank' => 'int'
	];

	protected $fillable = [
		'description'
	];
}
