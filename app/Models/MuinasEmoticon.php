<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEmoticon
 * 
 * @property string $interface
 * @property string $menuid
 * @property int $imagebank
 *
 * @package App\Models
 */
class MuinasEmoticon extends Model
{
	protected $table = 'muinas_emoticon';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'imagebank' => 'int'
	];

	protected $fillable = [
		'imagebank'
	];
}
