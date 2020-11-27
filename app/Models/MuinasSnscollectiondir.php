<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnscollectiondir
 * 
 * @property int $collection
 * @property string $name
 * @property string $comment
 * @property string $modified
 *
 * @package App\Models
 */
class MuinasSnscollectiondir extends Model
{
	protected $table = 'muinas_snscollectiondir';
	protected $primaryKey = 'collection';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'collection' => 'int'
	];

	protected $fillable = [
		'name',
		'comment',
		'modified'
	];
}
