<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivenoticereportfile
 * 
 * @property int $id
 * @property int $divenotice
 * @property string $title
 * @property string $name
 *
 * @package App\Models
 */
class MuinasDivenoticereportfile extends Model
{
	protected $table = 'muinas_divenoticereportfile';
	public $timestamps = false;

	protected $casts = [
		'divenotice' => 'int'
	];

	protected $fillable = [
		'divenotice',
		'title',
		'name'
	];
}
