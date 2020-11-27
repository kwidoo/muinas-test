<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisodraftfile
 * 
 * @property int $proviso_draft
 * @property int $filebank
 * @property string|null $title
 * @property bool|null $type
 * @property int|null $comment_id
 * @property int|null $person
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasProvisodraftfile extends Model
{
	protected $table = 'muinas_provisodraftfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'proviso_draft' => 'int',
		'filebank' => 'int',
		'type' => 'bool',
		'comment_id' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'type',
		'comment_id',
		'person',
		'created'
	];
}
