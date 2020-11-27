<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasInfopage
 * 
 * @property int $id
 * @property string $type
 * @property string $url
 * @property string $name
 * @property string $title
 * @property string $content
 * @property int $position
 * @property string $status
 *
 * @package App\Models
 */
class MuinasInfopage extends Model
{
	protected $table = 'muinas_infopage';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int'
	];

	protected $fillable = [
		'type',
		'url',
		'name',
		'title',
		'content',
		'position',
		'status'
	];
}
