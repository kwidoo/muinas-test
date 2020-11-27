<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFindacceptactUpdate
 * 
 * @property int $id
 * @property int $findacceptact
 * @property string|null $type
 * @property string $message
 * @property Carbon $created
 * 
 * @property MuinasFindacceptact $muinas_findacceptact
 *
 * @package App\Models
 */
class MuinasFindacceptactUpdate extends Model
{
	protected $table = 'muinas_findacceptact_update';
	public $timestamps = false;

	protected $casts = [
		'findacceptact' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'findacceptact',
		'type',
		'message',
		'created'
	];

	public function muinas_findacceptact()
	{
		return $this->belongsTo(MuinasFindacceptact::class, 'findacceptact');
	}
}
