<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSacrednaturalsiteitemcollectionpublic
 * 
 * @property int $snsitem
 * @property int $collection
 *
 * @package App\Models
 */
class MuinasSacrednaturalsiteitemcollectionpublic extends Model
{
	protected $table = 'muinas_sacrednaturalsiteitemcollectionpublic';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'collection' => 'int'
	];
}
