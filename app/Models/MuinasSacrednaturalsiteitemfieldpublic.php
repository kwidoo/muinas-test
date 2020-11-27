<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSacrednaturalsiteitemfieldpublic
 * 
 * @property int $snsitem
 * @property string $module
 * @property string $field
 *
 * @package App\Models
 */
class MuinasSacrednaturalsiteitemfieldpublic extends Model
{
	protected $table = 'muinas_sacrednaturalsiteitemfieldpublic';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int'
	];
}
