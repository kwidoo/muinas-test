<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticeclassifier
 * 
 * @property int $placeinfolmnotice
 * @property string $marker
 * @property int $classifier
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticeclassifier extends Model
{
	protected $table = 'muinas_placeinfolmnoticeclassifier';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int',
		'classifier' => 'int'
	];

	protected $fillable = [
		'marker'
	];
}
