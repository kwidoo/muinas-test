<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWargravepersonimage
 * 
 * @property int $wargraveperson
 * @property int $imagebank
 * @property string $description
 * @property int $position
 *
 * @package App\Models
 */
class MuinasWargravepersonimage extends Model
{
	protected $table = 'muinas_wargravepersonimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wargraveperson' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'description',
		'position'
	];
}
