<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationextrafile
 * 
 * @property int $compensationapplication
 * @property int $filebank
 * @property string $title
 *
 * @package App\Models
 */
class MuinasCompensationapplicationextrafile extends Model
{
	protected $table = 'muinas_compensationapplicationextrafile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];
}
