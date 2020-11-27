<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWargravefile
 * 
 * @property int $id
 * @property int $wargrave
 * @property string $title
 * @property string $name
 *
 * @package App\Models
 */
class MuinasWargravefile extends Model
{
	protected $table = 'muinas_wargravefile';
	public $timestamps = false;

	protected $casts = [
		'wargrave' => 'int'
	];

	protected $fillable = [
		'wargrave',
		'title',
		'name'
	];
}
