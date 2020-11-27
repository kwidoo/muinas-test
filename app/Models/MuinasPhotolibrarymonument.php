<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPhotolibrarymonument
 * 
 * @property int $photolibrary
 * @property int $monument
 *
 * @package App\Models
 */
class MuinasPhotolibrarymonument extends Model
{
	protected $table = 'muinas_photolibrarymonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'photolibrary' => 'int',
		'monument' => 'int'
	];

	protected $fillable = [
		'photolibrary',
		'monument'
	];
}
