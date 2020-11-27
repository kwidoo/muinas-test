<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsprotectionprotectable
 * 
 * @property int $snsprotection
 * @property int $protectable
 *
 * @package App\Models
 */
class MuinasSnsprotectionprotectable extends Model
{
	protected $table = 'muinas_snsprotectionprotectable';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsprotection' => 'int',
		'protectable' => 'int'
	];
}
