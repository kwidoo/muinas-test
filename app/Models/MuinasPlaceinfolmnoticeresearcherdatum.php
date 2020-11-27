<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticeresearcherdatum
 * 
 * @property int $placeinfolmnotice
 * @property int $user
 * @property string $content
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticeresearcherdatum extends Model
{
	protected $table = 'muinas_placeinfolmnoticeresearcherdata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int',
		'user' => 'int'
	];

	protected $fillable = [
		'content'
	];
}
