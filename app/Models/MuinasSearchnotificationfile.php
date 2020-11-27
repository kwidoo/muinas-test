<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchnotificationfile
 * 
 * @property int $searchnotification
 * @property int $filebank
 * @property string $title
 * @property int|null $person
 * @property Carbon $created
 * @property string|null $type
 *
 * @package App\Models
 */
class MuinasSearchnotificationfile extends Model
{
	protected $table = 'muinas_searchnotificationfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchnotification' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'person',
		'created',
		'type'
	];
}
