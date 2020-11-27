<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDefaultpage
 * 
 * @property string $content
 * @property string $id
 * @property string $title
 *
 * @package App\Models
 */
class MuinasDefaultpage extends Model
{
	protected $table = 'muinas_defaultpage';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'content',
		'title'
	];
}
