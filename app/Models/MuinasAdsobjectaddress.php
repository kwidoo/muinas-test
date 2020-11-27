<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAdsobjectaddress
 * 
 * @property int $adrid
 * @property string $oid
 * @property string $codeaddress
 * @property string $fulladdress
 * @property string $level1
 * @property string $level2
 * @property string $level3
 * @property string $level4
 * @property string $level5
 * @property string $level6
 * @property string $level7
 * @property string $level8
 * @property int $county
 * @property int $parish
 *
 * @package App\Models
 */
class MuinasAdsobjectaddress extends Model
{
	protected $table = 'muinas_adsobjectaddress';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'adrid' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $fillable = [
		'codeaddress',
		'fulladdress',
		'level1',
		'level2',
		'level3',
		'level4',
		'level5',
		'level6',
		'level7',
		'level8',
		'county',
		'parish'
	];
}
