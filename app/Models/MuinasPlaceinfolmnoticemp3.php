<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticemp3
 * 
 * @property int $id
 * @property int $placeinfolmnotice
 * @property string $title
 * @property string $status
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticemp3 extends Model
{
	protected $table = 'muinas_placeinfolmnoticemp3';
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int'
	];

	protected $fillable = [
		'placeinfolmnotice',
		'title',
		'status'
	];
}
