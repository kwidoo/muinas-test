<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationprocessReferral
 * 
 * @property int $coordinationprocess
 * @property string $comment
 * 
 * @property MuinasCoordinationprocess $muinas_coordinationprocess
 *
 * @package App\Models
 */
class MuinasCoordinationprocessReferral extends Model
{
	protected $table = 'muinas_coordinationprocess_referral';
	protected $primaryKey = 'coordinationprocess';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordinationprocess' => 'int'
	];

	protected $fillable = [
		'comment'
	];

	public function muinas_coordinationprocess()
	{
		return $this->belongsTo(MuinasCoordinationprocess::class, 'coordinationprocess');
	}
}
