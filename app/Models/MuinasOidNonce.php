<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOidNonce
 * 
 * @property string $server_url
 * @property int $timestamp
 * @property string $salt
 *
 * @package App\Models
 */
class MuinasOidNonce extends Model
{
	protected $table = 'muinas_oid_nonces';
	protected $primaryKey = 'server_url(255';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'timestamp' => 'int'
	];

	protected $fillable = [
		'server_url',
		'timestamp',
		'salt'
	];
}
