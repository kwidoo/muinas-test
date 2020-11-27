<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasTranslationmarker
 * 
 * @property int $id
 * @property int|null $parent
 * @property string $title
 * @property string $type
 * @property string|null $ns
 * @property string|null $trace
 * @property string|null $path
 *
 * @package App\Models
 */
class MuinasTranslationmarker extends Model
{
	protected $table = 'muinas_translationmarker';
	public $timestamps = false;

	protected $casts = [
		'parent' => 'int'
	];

	protected $fillable = [
		'parent',
		'title',
		'type',
		'ns',
		'trace',
		'path'
	];
}
