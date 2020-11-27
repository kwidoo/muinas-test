<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasArchitectureimage
 * 
 * @property int $architecture
 * @property int $imagebank
 * @property bool|null $classified
 * @property string $description
 * @property int $position
 *
 * @package App\Models
 */
class MuinasArchitectureimage extends Model
{
	protected $table = 'muinas_architectureimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'architecture' => 'int',
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
