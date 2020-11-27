<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsresourcetext
 * 
 * @property int $snsresource
 * @property string $text
 *
 * @package App\Models
 */
class MuinasSnsresourcetext extends Model
{
	protected $table = 'muinas_snsresourcetext';
	protected $primaryKey = 'snsresource';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsresource' => 'int'
	];

	protected $fillable = [
		'text'
	];
}
