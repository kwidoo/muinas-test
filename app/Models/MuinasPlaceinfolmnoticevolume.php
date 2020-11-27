<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticevolume
 * 
 * @property int $placeinfolmnotice
 * @property int $volume
 * @property string $redtext
 * @property string $comment
 * @property bool|null $publish
 * @property string $page
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticevolume extends Model
{
	protected $table = 'muinas_placeinfolmnoticevolume';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int',
		'volume' => 'int',
		'publish' => 'bool'
	];

	protected $fillable = [
		'redtext',
		'comment',
		'publish',
		'page'
	];
}
