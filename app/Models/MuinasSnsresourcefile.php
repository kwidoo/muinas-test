<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsresourcefile
 * 
 * @property int $snsresource
 * @property string $fileext
 * @property string $filename
 *
 * @package App\Models
 */
class MuinasSnsresourcefile extends Model
{
	protected $table = 'muinas_snsresourcefile';
	protected $primaryKey = 'snsresource';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsresource' => 'int'
	];

	protected $fillable = [
		'fileext',
		'filename'
	];
}
