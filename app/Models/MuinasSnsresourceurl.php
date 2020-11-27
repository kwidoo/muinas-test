<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsresourceurl
 * 
 * @property int $snsresource
 * @property string $url
 *
 * @package App\Models
 */
class MuinasSnsresourceurl extends Model
{
	protected $table = 'muinas_snsresourceurl';
	protected $primaryKey = 'snsresource';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsresource' => 'int'
	];

	protected $fillable = [
		'url'
	];
}
