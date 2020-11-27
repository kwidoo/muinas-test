<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasLink
 * 
 * @property int $id
 * @property string $name
 * @property string $link
 * @property Carbon $created
 * @property string|null $fileext
 * @property string $status
 * @property string $type
 *
 * @package App\Models
 */
class MuinasLink extends Model
{
	protected $table = 'muinas_link';
	public $timestamps = false;

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'name',
		'link',
		'created',
		'fileext',
		'status',
		'type'
	];
}
