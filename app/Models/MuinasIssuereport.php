<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasIssuereport
 * 
 * @property int $id
 * @property Carbon $created
 * @property string $systemdata
 * @property string $issue
 * @property int $ownerperson
 * @property int|null $systemnotice
 * 
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property MuinasSystemnotice|null $muinas_systemnotice
 *
 * @package App\Models
 */
class MuinasIssuereport extends Model
{
	protected $table = 'muinas_issuereport';
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'systemnotice' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'created',
		'systemdata',
		'issue',
		'ownerperson',
		'systemnotice'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_systemnotice()
	{
		return $this->belongsTo(MuinasSystemnotice::class, 'systemnotice');
	}
}
