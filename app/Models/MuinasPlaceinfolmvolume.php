<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmvolume
 * 
 * @property int $id
 * @property string $name
 * @property string $author
 * @property string $place
 * @property int|null $year
 * @property string $status
 * @property string $publication
 *
 * @package App\Models
 */
class MuinasPlaceinfolmvolume extends Model
{
	protected $table = 'muinas_placeinfolmvolume';
	public $timestamps = false;

	protected $casts = [
		'year' => 'int'
	];

	protected $fillable = [
		'name',
		'author',
		'place',
		'year',
		'status',
		'publication'
	];
}
