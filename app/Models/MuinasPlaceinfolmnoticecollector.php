<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticecollector
 * 
 * @property int $placeinfolmnotice
 * @property string $comment
 * @property int $collector
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticecollector extends Model
{
	protected $table = 'muinas_placeinfolmnoticecollector';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int',
		'collector' => 'int'
	];

	protected $fillable = [
		'comment'
	];
}
