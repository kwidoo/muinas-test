<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationurl
 * 
 * @property int $id
 * @property int $coordination
 * @property string $title
 * @property string $url
 * 
 * @property MuinasCoordination $muinas_coordination
 *
 * @package App\Models
 */
class MuinasCoordinationurl extends Model
{
	protected $table = 'muinas_coordinationurl';
	public $timestamps = false;

	protected $casts = [
		'coordination' => 'int'
	];

	protected $fillable = [
		'coordination',
		'title',
		'url'
	];

	public function muinas_coordination()
	{
		return $this->belongsTo(MuinasCoordination::class, 'coordination');
	}
}
