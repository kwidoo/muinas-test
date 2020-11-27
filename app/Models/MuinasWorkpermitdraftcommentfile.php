<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitdraftcommentfile
 * 
 * @property int $id
 * @property int $filebank
 * @property int|null $draftcomment
 * @property string|null $title
 * @property string|null $type
 *
 * @package App\Models
 */
class MuinasWorkpermitdraftcommentfile extends Model
{
	protected $table = 'muinas_workpermitdraftcommentfile';
	public $timestamps = false;

	protected $casts = [
		'filebank' => 'int',
		'draftcomment' => 'int'
	];

	protected $fillable = [
		'filebank',
		'draftcomment',
		'title',
		'type'
	];
}
