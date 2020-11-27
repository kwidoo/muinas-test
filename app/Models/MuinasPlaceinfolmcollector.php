<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmcollector
 * 
 * @property int $id
 * @property string $forename
 * @property string $lastname
 * @property string $status
 * @property string $birthyear
 * @property string $comment
 *
 * @package App\Models
 */
class MuinasPlaceinfolmcollector extends Model
{
	protected $table = 'muinas_placeinfolmcollector';
	public $timestamps = false;

	protected $fillable = [
		'forename',
		'lastname',
		'status',
		'birthyear',
		'comment'
	];
}
