<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoimage
 * 
 * @property int $placeinfo
 * @property int $imagebank
 * @property string $description
 *
 * @package App\Models
 */
class MuinasPlaceinfoimage extends Model
{
	protected $table = 'muinas_placeinfoimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'imagebank' => 'int'
	];

	protected $fillable = [
		'description'
	];
}
