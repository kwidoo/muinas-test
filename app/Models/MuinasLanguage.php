<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasLanguage
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $tag
 * @property string|null $lang
 * @property int|null $active
 *
 * @package App\Models
 */
class MuinasLanguage extends Model
{
	protected $table = 'muinas_languages';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int'
	];

	protected $fillable = [
		'name',
		'tag',
		'lang',
		'active'
	];
}
