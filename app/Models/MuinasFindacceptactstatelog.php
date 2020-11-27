<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFindacceptactstatelog
 * 
 * @property int $id
 * @property int $findacceptact
 * @property string $state
 * @property string $name
 * @property string $message
 * @property Carbon $created
 * 
 * @property MuinasFindacceptact $muinas_findacceptact
 *
 * @package App\Models
 */
class MuinasFindacceptactstatelog extends Model
{
	protected $table = 'muinas_findacceptactstatelog';
	public $timestamps = false;

	protected $casts = [
		'findacceptact' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'findacceptact',
		'state',
		'name',
		'message',
		'created'
	];

	public function muinas_findacceptact()
	{
		return $this->belongsTo(MuinasFindacceptact::class, 'findacceptact');
	}
}
