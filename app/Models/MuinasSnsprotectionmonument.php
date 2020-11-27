<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsprotectionmonument
 * 
 * @property int $snsprotection
 * @property int $monument
 *
 * @package App\Models
 */
class MuinasSnsprotectionmonument extends Model
{
	protected $table = 'muinas_snsprotectionmonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsprotection' => 'int',
		'monument' => 'int'
	];
}
