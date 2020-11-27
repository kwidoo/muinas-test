<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuildingimage
 * 
 * @property int $evmbuilding
 * @property int|null $category
 * @property int $imagebank
 * @property int $position
 * @property bool|null $showpublic
 * 
 * @property MuinasEvmbuilding $muinas_evmbuilding
 * @property MuinasImagebank $muinas_imagebank
 * @property MuinasClassificator|null $muinas_classificator
 *
 * @package App\Models
 */
class MuinasEvmbuildingimage extends Model
{
	protected $table = 'muinas_evmbuildingimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'evmbuilding' => 'int',
		'category' => 'int',
		'imagebank' => 'int',
		'position' => 'int',
		'showpublic' => 'bool'
	];

	protected $fillable = [
		'category',
		'position',
		'showpublic'
	];

	public function muinas_evmbuilding()
	{
		return $this->belongsTo(MuinasEvmbuilding::class, 'evmbuilding');
	}

	public function muinas_imagebank()
	{
		return $this->belongsTo(MuinasImagebank::class, 'imagebank');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'category');
	}
}
