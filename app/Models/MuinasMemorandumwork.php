<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMemorandumwork
 * 
 * @property int $id
 * @property int $memorandum
 * @property string $work
 * @property Carbon|null $deadline
 * @property string $comment
 * 
 * @property MuinasMemorandum $muinas_memorandum
 *
 * @package App\Models
 */
class MuinasMemorandumwork extends Model
{
	protected $table = 'muinas_memorandumwork';
	public $timestamps = false;

	protected $casts = [
		'memorandum' => 'int'
	];

	protected $dates = [
		'deadline'
	];

	protected $fillable = [
		'memorandum',
		'work',
		'deadline',
		'comment'
	];

	public function muinas_memorandum()
	{
		return $this->belongsTo(MuinasMemorandum::class, 'memorandum');
	}
}
