<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProtectiononertlink
 * 
 * @property int $id
 * @property int $protectionon
 * @property int $ertlink
 *
 * @package App\Models
 */
class MuinasProtectiononertlink extends Model
{
	protected $table = 'muinas_protectiononertlink';
	public $timestamps = false;

	protected $casts = [
		'protectionon' => 'int',
		'ertlink' => 'int'
	];

	protected $fillable = [
		'protectionon',
		'ertlink'
	];
}
