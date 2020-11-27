<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSacrednaturalsitepage
 * 
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $name
 * @property string $content
 * @property int $position
 * @property string $status
 *
 * @package App\Models
 */
class MuinasSacrednaturalsitepage extends Model
{
	protected $table = 'muinas_sacrednaturalsitepage';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int'
	];

	protected $fillable = [
		'title',
		'url',
		'name',
		'content',
		'position',
		'status'
	];
}
