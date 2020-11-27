<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPreceptfile
 * 
 * @property int $id
 * @property int $precept
 * @property string $title
 * @property string $name
 *
 * @package App\Models
 */
class MuinasPreceptfile extends Model
{
	protected $table = 'muinas_preceptfile';
	public $timestamps = false;

	protected $casts = [
		'precept' => 'int'
	];

	protected $fillable = [
		'precept',
		'title',
		'name'
	];
}
