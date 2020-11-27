<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationcommentfile
 * 
 * @property int $id
 * @property int $filebank
 * @property int $comment
 * @property string|null $title
 * @property int|null $type
 *
 * @package App\Models
 */
class MuinasActivitylicenceapplicationcommentfile extends Model
{
	protected $table = 'muinas_activitylicenceapplicationcommentfile';
	public $timestamps = false;

	protected $casts = [
		'filebank' => 'int',
		'comment' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'filebank',
		'comment',
		'title',
		'type'
	];
}
