<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsprotection
 * 
 * @property int $id
 * @property int|null $snsitem
 * @property Carbon|null $marked
 * @property string $cadastralcode
 * @property string $owner
 * @property string $comment
 * @property Carbon|null $created
 * @property Carbon|null $modified
 * @property int|null $creater
 * @property string $status
 *
 * @package App\Models
 */
class MuinasSnsprotection extends Model
{
	protected $table = 'muinas_snsprotection';
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'creater' => 'int'
	];

	protected $dates = [
		'marked',
		'created',
		'modified'
	];

	protected $fillable = [
		'snsitem',
		'marked',
		'cadastralcode',
		'owner',
		'comment',
		'created',
		'modified',
		'creater',
		'status'
	];
}
