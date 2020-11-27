<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPriv
 * 
 * @property string $interface
 * @property string $controller
 * @property string $action
 * @property string $ownertype
 * @property int $owner
 * @property string $value
 *
 * @package App\Models
 */
class MuinasPriv extends Model
{
	protected $table = 'muinas_privs';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'owner' => 'int'
	];

	protected $fillable = [
		'interface',
		'controller',
		'action',
		'ownertype',
		'owner',
		'value'
	];
}
