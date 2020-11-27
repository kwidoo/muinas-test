<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsprotectionmarktype
 * 
 * @property int $snsprotection
 * @property int $marktype
 *
 * @package App\Models
 */
class MuinasSnsprotectionmarktype extends Model
{
	protected $table = 'muinas_snsprotectionmarktype';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsprotection' => 'int',
		'marktype' => 'int'
	];
}
