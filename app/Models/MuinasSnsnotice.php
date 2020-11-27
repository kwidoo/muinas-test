<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsnotice
 * 
 * @property int $id
 * @property string $comment
 * @property string $talecomment
 * @property string $text
 * @property bool|null $coded
 * @property string $codercomment
 * @property bool|null $originaltextcopy
 * @property string $status
 * @property int|null $creater
 * @property Carbon|null $created
 * @property Carbon|null $modified
 * @property int|null $exnotice
 * @property string $type
 * @property string $reference
 *
 * @package App\Models
 */
class MuinasSnsnotice extends Model
{
	protected $table = 'muinas_snsnotice';
	public $timestamps = false;

	protected $casts = [
		'coded' => 'bool',
		'originaltextcopy' => 'bool',
		'creater' => 'int',
		'exnotice' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'comment',
		'talecomment',
		'text',
		'coded',
		'codercomment',
		'originaltextcopy',
		'status',
		'creater',
		'created',
		'modified',
		'exnotice',
		'type',
		'reference'
	];
}
