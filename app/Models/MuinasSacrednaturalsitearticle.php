<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSacrednaturalsitearticle
 * 
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $name
 * @property string $content
 * @property Carbon $created
 * @property string $status
 *
 * @package App\Models
 */
class MuinasSacrednaturalsitearticle extends Model
{
	protected $table = 'muinas_sacrednaturalsitearticle';
	public $timestamps = false;

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'url',
		'name',
		'content',
		'created',
		'status'
	];
}
