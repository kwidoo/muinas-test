<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitcommentfile
 * 
 * @property int $comment
 * @property int $filebank
 * @property string|null $title
 * @property int|null $person
 * @property Carbon $created
 * @property string $type
 *
 * @package App\Models
 */
class MuinasWorkpermitcommentfile extends Model
{
	protected $table = 'muinas_workpermitcommentfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'comment' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'comment',
		'filebank',
		'title',
		'person',
		'created',
		'type'
	];
}
