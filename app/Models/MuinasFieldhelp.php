<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFieldhelp
 * 
 * @property int $id
 * @property string $marker
 * @property string $field
 * @property string $content
 *
 * @package App\Models
 */
class MuinasFieldhelp extends Model
{
	protected $table = 'muinas_fieldhelp';
	public $timestamps = false;

	protected $fillable = [
		'marker',
		'field',
		'content'
	];
}
