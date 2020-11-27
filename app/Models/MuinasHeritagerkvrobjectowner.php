<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagerkvrobjectowner
 * 
 * @property string $rkvrobject
 * @property int $owner
 *
 * @package App\Models
 */
class MuinasHeritagerkvrobjectowner extends Model
{
	protected $table = 'muinas_heritagerkvrobjectowner';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'owner' => 'int'
	];
}
