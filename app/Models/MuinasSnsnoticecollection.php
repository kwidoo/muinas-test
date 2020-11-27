<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsnoticecollection
 * 
 * @property int $snsnotice
 * @property int $collection
 *
 * @package App\Models
 */
class MuinasSnsnoticecollection extends Model
{
	protected $table = 'muinas_snsnoticecollection';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsnotice' => 'int',
		'collection' => 'int'
	];
}
