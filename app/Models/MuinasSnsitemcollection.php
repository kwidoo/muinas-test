<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsitemcollection
 * 
 * @property int $snsitem
 * @property int $collection
 *
 * @package App\Models
 */
class MuinasSnsitemcollection extends Model
{
	protected $table = 'muinas_snsitemcollection';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'collection' => 'int'
	];
}
