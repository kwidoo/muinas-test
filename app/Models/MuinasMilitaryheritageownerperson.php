<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMilitaryheritageownerperson
 * 
 * @property int $militaryheritage
 * @property int $ownerperson
 *
 * @package App\Models
 */
class MuinasMilitaryheritageownerperson extends Model
{
	protected $table = 'muinas_militaryheritageownerperson';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'militaryheritage' => 'int',
		'ownerperson' => 'int'
	];
}
