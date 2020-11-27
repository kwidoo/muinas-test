<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageimage
 * 
 * @property int $heritage
 * @property int $imagebank
 * @property bool|null $classified
 * @property string $description
 * @property int|null $position
 * 
 * @property MuinasImagebank $muinas_imagebank
 * @property MuinasHeritage $muinas_heritage
 *
 * @package App\Models
 */
class MuinasHeritageimage extends Model
{
	protected $table = 'muinas_heritageimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'imagebank' => 'int',
		'classified' => 'bool',
		'position' => 'int'
	];

	protected $fillable = [
		'classified',
		'description',
		'position'
	];

	public function muinas_imagebank()
	{
		return $this->belongsTo(MuinasImagebank::class, 'imagebank');
	}

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}
}
