<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagerkvrobjectrelation
 * 
 * @property string $type
 * @property string $typevalue
 * @property string $rkvrobject
 *
 * @package App\Models
 */
class MuinasHeritagerkvrobjectrelation extends Model
{
	protected $table = 'muinas_heritagerkvrobjectrelation';
	public $incrementing = false;
	public $timestamps = false;
}
