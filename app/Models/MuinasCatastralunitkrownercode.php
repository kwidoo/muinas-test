<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCatastralunitkrownercode
 * 
 * @property int $code
 * @property bool $valid
 *
 * @package App\Models
 */
class MuinasCatastralunitkrownercode extends Model
{
	protected $table = 'muinas_catastralunitkrownercode';
	protected $primaryKey = 'code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'code' => 'int',
		'valid' => 'bool'
	];

	protected $fillable = [
		'valid'
	];
}
