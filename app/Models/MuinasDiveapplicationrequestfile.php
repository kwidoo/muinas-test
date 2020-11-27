<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequestfile
 * 
 * @property int $diveapplicationrequest
 * @property int $filebank
 * @property string $title
 * @property int|null $person
 * @property Carbon $created
 * @property int|null $type
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequestfile extends Model
{
	protected $table = 'muinas_diveapplicationrequestfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'diveapplicationrequest' => 'int',
		'filebank' => 'int',
		'person' => 'int',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'person',
		'created',
		'type'
	];
}
