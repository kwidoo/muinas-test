<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagecmsubtype
 * 
 * @property int $heritage
 * @property int $cm_subtype
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasHeritagecmsubtype extends Model
{
	protected $table = 'muinas_heritagecmsubtype';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'cm_subtype' => 'int'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'cm_subtype');
	}
}
