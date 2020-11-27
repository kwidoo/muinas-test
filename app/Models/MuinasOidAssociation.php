<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOidAssociation
 * 
 * @property string $server_url
 * @property string $handle
 * @property boolean $secret
 * @property int $issued
 * @property int $lifetime
 * @property string $assoc_type
 *
 * @package App\Models
 */
class MuinasOidAssociation extends Model
{
	protected $table = 'muinas_oid_associations';
	protected $primaryKey = 'server_url(255';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'secret' => 'boolean',
		'issued' => 'int',
		'lifetime' => 'int'
	];

	protected $hidden = [
		'secret'
	];

	protected $fillable = [
		'server_url',
		'handle',
		'secret',
		'issued',
		'lifetime',
		'assoc_type'
	];
}
