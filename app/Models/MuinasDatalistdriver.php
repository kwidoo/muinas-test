<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDatalistdriver
 * 
 * @property string $owner
 * @property string $name
 * @property string $datalist
 *
 * @package App\Models
 */
class MuinasDatalistdriver extends Model
{
	protected $table = 'muinas_datalistdriver';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'datalist'
	];
}
