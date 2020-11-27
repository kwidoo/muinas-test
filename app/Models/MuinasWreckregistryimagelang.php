<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWreckregistryimagelang
 * 
 * @property int $imagebank
 * @property string $lang
 * @property string $description
 * @property string|null $title
 *
 * @package App\Models
 */
class MuinasWreckregistryimagelang extends Model
{
	protected $table = 'muinas_wreckregistryimagelang';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'imagebank' => 'int'
	];

	protected $fillable = [
		'description',
		'title'
	];
}
