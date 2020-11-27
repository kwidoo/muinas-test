<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchpermitfile
 * 
 * @property int $searchpermit
 * @property int $filebank
 * @property string|null $type
 * @property int $person
 *
 * @package App\Models
 */
class MuinasSearchpermitfile extends Model
{
	protected $table = 'muinas_searchpermitfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchpermit' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $fillable = [
		'searchpermit',
		'filebank',
		'type',
		'person'
	];
}
