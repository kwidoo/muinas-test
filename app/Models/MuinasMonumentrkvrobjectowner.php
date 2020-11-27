<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentrkvrobjectowner
 * 
 * @property string $rkvrobject
 * @property int $owner
 *
 * @package App\Models
 */
class MuinasMonumentrkvrobjectowner extends Model
{
	protected $table = 'muinas_monumentrkvrobjectowner';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'owner' => 'int'
	];
}
