<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSacrednaturalsiteuserallowedindexqueue
 * 
 * @property int $id
 * @property int|null $pk
 * @property string|null $entity
 * @property int|null $user
 *
 * @package App\Models
 */
class MuinasSacrednaturalsiteuserallowedindexqueue extends Model
{
	protected $table = 'muinas_sacrednaturalsiteuserallowedindexqueue';
	public $timestamps = false;

	protected $casts = [
		'pk' => 'int',
		'user' => 'int'
	];

	protected $fillable = [
		'pk',
		'entity',
		'user'
	];
}
