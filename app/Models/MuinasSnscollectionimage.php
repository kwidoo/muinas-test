<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnscollectionimage
 * 
 * @property int $collection
 * @property string $name
 * @property string $location
 * @property Carbon|null $recorded
 * @property string $author
 * @property string $copyright
 * @property string $comment
 * @property Carbon|null $modified
 * @property int $imagebank
 *
 * @package App\Models
 */
class MuinasSnscollectionimage extends Model
{
	protected $table = 'muinas_snscollectionimage';
	protected $primaryKey = 'collection';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'collection' => 'int',
		'imagebank' => 'int'
	];

	protected $dates = [
		'recorded',
		'modified'
	];

	protected $fillable = [
		'name',
		'location',
		'recorded',
		'author',
		'copyright',
		'comment',
		'modified',
		'imagebank'
	];
}
