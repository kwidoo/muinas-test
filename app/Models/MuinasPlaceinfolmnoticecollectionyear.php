<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticecollectionyear
 * 
 * @property int $placeinfolmnotice
 * @property string $year
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticecollectionyear extends Model
{
	protected $table = 'muinas_placeinfolmnoticecollectionyear';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int'
	];
}
