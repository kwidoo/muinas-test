<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisationreport
 * 
 * @property string $title
 * @property string $name
 * @property int $authorisation
 * @property string $images
 *
 * @package App\Models
 */
class MuinasAuthorisationreport extends Model
{
	protected $table = 'muinas_authorisationreport';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'authorisation' => 'int'
	];

	protected $fillable = [
		'title',
		'images'
	];
}
