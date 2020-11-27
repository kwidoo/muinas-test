<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticeimportref
 * 
 * @property int $exid
 * @property string $entity
 * @property int $inid
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticeimportref extends Model
{
	protected $table = 'muinas_placeinfolmnoticeimportref';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'exid' => 'int',
		'inid' => 'int'
	];
}
