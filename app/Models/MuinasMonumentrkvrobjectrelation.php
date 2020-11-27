<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentrkvrobjectrelation
 * 
 * @property string $type
 * @property string $typevalue
 * @property string $rkvrobject
 *
 * @package App\Models
 */
class MuinasMonumentrkvrobjectrelation extends Model
{
	protected $table = 'muinas_monumentrkvrobjectrelation';
	public $incrementing = false;
	public $timestamps = false;
}
