<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivenoticefile
 * 
 * @property int $id
 * @property int $divenotice
 * @property string $title
 * @property string $name
 * @property int|null $filebank
 * @property int|null $type
 *
 * @package App\Models
 */
class MuinasDivenoticefile extends Model
{
	protected $table = 'muinas_divenoticefile';
	public $timestamps = false;

	protected $casts = [
		'divenotice' => 'int',
		'filebank' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'divenotice',
		'title',
		'name',
		'filebank',
		'type'
	];
}
