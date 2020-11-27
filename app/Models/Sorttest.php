<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sorttest
 * 
 * @property string $tekts
 *
 * @package App\Models
 */
class Sorttest extends Model
{
	protected $table = 'sorttest';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'tekts'
	];
}
