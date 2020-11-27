<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsinterviewcollectionclip
 * 
 * @property int $snsinterview
 * @property int $collection
 * @property int $clip
 *
 * @package App\Models
 */
class MuinasSnsinterviewcollectionclip extends Model
{
	protected $table = 'muinas_snsinterviewcollectionclip';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsinterview' => 'int',
		'collection' => 'int',
		'clip' => 'int'
	];
}
