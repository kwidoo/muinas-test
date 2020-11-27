<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRkvrobject
 * 
 * @property string $rkvrid
 * @property string $type
 * @property string $rulercode
 * @property string $authorizedcode
 *
 * @package App\Models
 */
class MuinasRkvrobject extends Model
{
	protected $table = 'muinas_rkvrobject';
	protected $primaryKey = 'rkvrid';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'type',
		'rulercode',
		'authorizedcode'
	];
}
