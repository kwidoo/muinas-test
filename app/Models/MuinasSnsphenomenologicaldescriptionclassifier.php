<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsphenomenologicaldescriptionclassifier
 * 
 * @property int $snsphenomenologicaldescription
 * @property int $classifier
 * @property string $marker
 *
 * @package App\Models
 */
class MuinasSnsphenomenologicaldescriptionclassifier extends Model
{
	protected $table = 'muinas_snsphenomenologicaldescriptionclassifier';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsphenomenologicaldescription' => 'int',
		'classifier' => 'int'
	];

	protected $fillable = [
		'marker'
	];
}
