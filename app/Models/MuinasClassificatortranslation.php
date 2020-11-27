<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasClassificatortranslation
 * 
 * @property int $classificator
 * @property string $lang
 * @property string $description
 *
 * @package App\Models
 */
class MuinasClassificatortranslation extends Model
{
	protected $table = 'muinas_classificatortranslation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'classificator' => 'int'
	];

	protected $fillable = [
		'description'
	];
}
