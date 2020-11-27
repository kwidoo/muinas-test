<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmpresenter
 * 
 * @property int $id
 * @property string $forename
 * @property string $lastname
 * @property string $othername
 * @property string $birthyear
 * @property string $status
 * @property int $old_county
 * @property int $old_parish
 *
 * @package App\Models
 */
class MuinasPlaceinfolmpresenter extends Model
{
	protected $table = 'muinas_placeinfolmpresenter';
	public $timestamps = false;

	protected $casts = [
		'old_county' => 'int',
		'old_parish' => 'int'
	];

	protected $fillable = [
		'forename',
		'lastname',
		'othername',
		'birthyear',
		'status',
		'old_county',
		'old_parish'
	];
}
