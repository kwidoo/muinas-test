<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMilitaryheritagelog
 * 
 * @property int $id
 * @property int $militaryheritage
 * @property string $columnname
 * @property string|null $oldvalue
 * @property string|null $newvalue
 * @property string $user
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasMilitaryheritagelog extends Model
{
	protected $table = 'muinas_militaryheritagelog';
	public $timestamps = false;

	protected $casts = [
		'militaryheritage' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'militaryheritage',
		'columnname',
		'oldvalue',
		'newvalue',
		'user',
		'created'
	];
}
