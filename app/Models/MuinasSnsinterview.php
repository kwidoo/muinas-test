<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsinterview
 * 
 * @property int $id
 * @property int $snsitem
 * @property string $reference
 * @property string $toponym
 * @property string $interviewer
 * @property string $photographer
 * @property string $voicerecorder
 * @property string $cameraman
 * @property Carbon|null $interviewdate
 * @property string $soundarhivereference
 * @property string $literer
 * @property string $interviewplace
 * @property string $soundlistcompiler
 * @property string $coder
 * @property string $comment
 * @property string $lore
 * @property int|null $creater
 * @property Carbon|null $created
 * @property Carbon|null $modified
 * @property string $status
 *
 * @package App\Models
 */
class MuinasSnsinterview extends Model
{
	protected $table = 'muinas_snsinterview';
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'creater' => 'int'
	];

	protected $dates = [
		'interviewdate',
		'created',
		'modified'
	];

	protected $fillable = [
		'snsitem',
		'reference',
		'toponym',
		'interviewer',
		'photographer',
		'voicerecorder',
		'cameraman',
		'interviewdate',
		'soundarhivereference',
		'literer',
		'interviewplace',
		'soundlistcompiler',
		'coder',
		'comment',
		'lore',
		'creater',
		'created',
		'modified',
		'status'
	];
}
