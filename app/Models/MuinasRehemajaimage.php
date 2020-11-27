<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRehemajaimage
 * 
 * @property int $rehemaja
 * @property string $category
 * @property string $description
 * @property int $imagebank
 * @property int|null $detail
 * @property int|null $outbuilding
 * @property bool|null $showpublic
 * @property int|null $position
 *
 * @package App\Models
 */
class MuinasRehemajaimage extends Model
{
	protected $table = 'muinas_rehemajaimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rehemaja' => 'int',
		'imagebank' => 'int',
		'detail' => 'int',
		'outbuilding' => 'int',
		'showpublic' => 'bool',
		'position' => 'int'
	];

	protected $fillable = [
		'category',
		'description',
		'detail',
		'outbuilding',
		'showpublic',
		'position'
	];
}
