<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentDeprotectionprocess
 * 
 * @property int $monument
 * @property string $status
 * @property string $comment
 * @property int|null $finalizer
 * @property Carbon|null $finalized
 * 
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasMonumentDeprotectionprocess extends Model
{
	protected $table = 'muinas_monument_deprotectionprocess';
	protected $primaryKey = 'monument';
	public $timestamps = false;

	protected $casts = [
		'finalizer' => 'int'
	];

	protected $dates = [
		'finalized'
	];

	protected $fillable = [
		'status',
		'comment',
		'finalizer',
		'finalized'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'finalizer');
	}
}
