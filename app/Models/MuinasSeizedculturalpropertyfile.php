<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSeizedculturalpropertyfile
 * 
 * @property int $id
 * @property int $seizedculturalproperty
 * @property string $title
 * @property string $name
 *
 * @package App\Models
 */
class MuinasSeizedculturalpropertyfile extends Model
{
	protected $table = 'muinas_seizedculturalpropertyfile';
	public $timestamps = false;

	protected $casts = [
		'seizedculturalproperty' => 'int'
	];

	protected $fillable = [
		'seizedculturalproperty',
		'title',
		'name'
	];
}
