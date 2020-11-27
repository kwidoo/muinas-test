<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsplaceclassifier
 * 
 * @property int $snsplace
 * @property int $classifier
 * @property string $marker
 *
 * @package App\Models
 */
class MuinasSnsplaceclassifier extends Model
{
	protected $table = 'muinas_snsplaceclassifier';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsplace' => 'int',
		'classifier' => 'int'
	];

	protected $fillable = [
		'marker'
	];
}
