<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDatalist
 * 
 * @property int $id
 * @property int $owner
 * @property string $name
 * @property string $marker
 * @property string $filter
 * @property string $paginator
 * @property string $sorting
 * @property string|null $router
 *
 * @package App\Models
 */
class MuinasDatalist extends Model
{
	protected $table = 'muinas_datalist';
	public $timestamps = false;

	protected $casts = [
		'owner' => 'int'
	];

	protected $fillable = [
		'owner',
		'name',
		'marker',
		'filter',
		'paginator',
		'sorting',
		'router'
	];
}
