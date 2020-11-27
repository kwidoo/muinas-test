<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsresourcecollection
 * 
 * @property int $snsresource
 * @property int $collection
 *
 * @package App\Models
 */
class MuinasSnsresourcecollection extends Model
{
	protected $table = 'muinas_snsresourcecollection';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsresource' => 'int',
		'collection' => 'int'
	];
}
