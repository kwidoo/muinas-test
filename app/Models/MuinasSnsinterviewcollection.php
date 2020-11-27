<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsinterviewcollection
 * 
 * @property int $snsinterview
 * @property int $collection
 *
 * @package App\Models
 */
class MuinasSnsinterviewcollection extends Model
{
	protected $table = 'muinas_snsinterviewcollection';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsinterview' => 'int',
		'collection' => 'int'
	];
}
