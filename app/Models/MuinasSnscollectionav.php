<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnscollectionav
 * 
 * @property int $collection
 * @property string $name
 * @property string $author
 * @property string $speaker
 * @property string $location
 * @property Carbon|null $recorded
 * @property string $copyright
 * @property string $comment
 * @property string $modified
 * @property string $duration
 *
 * @package App\Models
 */
class MuinasSnscollectionav extends Model
{
	protected $table = 'muinas_snscollectionav';
	protected $primaryKey = 'collection';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'collection' => 'int'
	];

	protected $dates = [
		'recorded'
	];

	protected $fillable = [
		'name',
		'author',
		'speaker',
		'location',
		'recorded',
		'copyright',
		'comment',
		'modified',
		'duration'
	];
}
