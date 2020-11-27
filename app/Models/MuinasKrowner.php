<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasKrowner
 * 
 * @property int $id
 * @property string $uniqhash
 * @property int $ownerperson
 *
 * @package App\Models
 */
class MuinasKrowner extends Model
{
	protected $table = 'muinas_krowner';
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'uniqhash',
		'ownerperson'
	];
}
