<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSacrednaturalsiteindex
 * 
 * @property int $pk
 * @property string $entity
 * @property string $field
 * @property string $value
 * @property string $calculatedvalue
 * @property int|null $snsitem
 *
 * @package App\Models
 */
class MuinasSacrednaturalsiteindex extends Model
{
	protected $table = 'muinas_sacrednaturalsiteindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pk' => 'int',
		'snsitem' => 'int'
	];

	protected $fillable = [
		'pk',
		'entity',
		'field',
		'value',
		'calculatedvalue',
		'snsitem'
	];
}
