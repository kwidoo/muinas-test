<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMilitaryheritageimage
 * 
 * @property int $militaryheritage
 * @property int $imagebank
 * @property bool|null $classified
 * @property string|null $description
 * @property int|null $position
 *
 * @package App\Models
 */
class MuinasMilitaryheritageimage extends Model
{
	protected $table = 'muinas_militaryheritageimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'militaryheritage' => 'int',
		'imagebank' => 'int',
		'classified' => 'bool',
		'position' => 'int'
	];

	protected $fillable = [
		'classified',
		'description',
		'position'
	];
}
