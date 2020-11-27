<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProtectiononertlinkmonument
 * 
 * @property int $id
 * @property int $protectiononertlink
 * @property int $monument
 * @property string $images
 *
 * @package App\Models
 */
class MuinasProtectiononertlinkmonument extends Model
{
	protected $table = 'muinas_protectiononertlinkmonument';
	public $timestamps = false;

	protected $casts = [
		'protectiononertlink' => 'int',
		'monument' => 'int'
	];

	protected $fillable = [
		'protectiononertlink',
		'monument',
		'images'
	];
}
