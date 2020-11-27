<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticeimage
 * 
 * @property int $placeinfolmnotice
 * @property int $imagebank
 * @property string $description
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticeimage extends Model
{
	protected $table = 'muinas_placeinfolmnoticeimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int',
		'imagebank' => 'int'
	];

	protected $fillable = [
		'description'
	];
}
