<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsresourceimage
 * 
 * @property int $snsresource
 * @property int $imagebank
 *
 * @package App\Models
 */
class MuinasSnsresourceimage extends Model
{
	protected $table = 'muinas_snsresourceimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsresource' => 'int',
		'imagebank' => 'int'
	];
}
