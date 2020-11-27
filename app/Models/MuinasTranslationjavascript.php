<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasTranslationjavascript
 * 
 * @property string $path
 * @property string $word
 * @property string $ns
 *
 * @package App\Models
 */
class MuinasTranslationjavascript extends Model
{
	protected $table = 'muinas_translationjavascript';
	public $incrementing = false;
	public $timestamps = false;
}
