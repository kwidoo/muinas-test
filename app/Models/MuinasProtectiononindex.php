<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProtectiononindex
 * 
 * @property int $protectionon
 * @property string $field
 * @property int $valueint
 * @property string $valuetext
 *
 * @package App\Models
 */
class MuinasProtectiononindex extends Model
{
	protected $table = 'muinas_protectiononindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'protectionon' => 'int',
		'valueint' => 'int'
	];

	protected $fillable = [
		'protectionon',
		'field',
		'valueint',
		'valuetext'
	];
}
