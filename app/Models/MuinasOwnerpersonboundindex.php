<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOwnerpersonboundindex
 * 
 * @property int $ownerperson
 * @property string $bound
 * @property int $count
 *
 * @package App\Models
 */
class MuinasOwnerpersonboundindex extends Model
{
	protected $table = 'muinas_ownerpersonboundindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'count' => 'int'
	];

	protected $fillable = [
		'count'
	];
}
