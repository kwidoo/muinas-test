<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSystemnotice
 * 
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $type
 * @property Carbon $created
 * @property string|null $url
 * @property string|null $status
 * 
 * @property Collection|MuinasIssuereport[] $muinas_issuereports
 * @property Collection|MuinasSystemnoticeperson[] $muinas_systemnoticepeople
 *
 * @package App\Models
 */
class MuinasSystemnotice extends Model
{
	protected $table = 'muinas_systemnotice';
	public $timestamps = false;

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'content',
		'type',
		'created',
		'url',
		'status'
	];

	public function muinas_issuereports()
	{
		return $this->hasMany(MuinasIssuereport::class, 'systemnotice');
	}

	public function muinas_systemnoticepeople()
	{
		return $this->hasMany(MuinasSystemnoticeperson::class, 'systemnotice');
	}
}
