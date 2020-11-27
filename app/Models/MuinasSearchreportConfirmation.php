<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportConfirmation
 * 
 * @property int $id
 * @property Carbon $created
 * @property string $state
 * @property Carbon $modified
 * @property int|null $pdf
 * @property int|null $bdoc
 * @property string $lang
 * @property int $creater
 * @property Carbon|null $signed
 * @property string $signtype
 * @property Carbon|null $submitted
 * @property string|null $adminstate
 * 
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property Collection|MuinasSearchreportConfirmationStatelog[] $muinas_searchreport_confirmation_statelogs
 *
 * @package App\Models
 */
class MuinasSearchreportConfirmation extends Model
{
	protected $table = 'muinas_searchreport_confirmation';
	public $timestamps = false;

	protected $casts = [
		'pdf' => 'int',
		'bdoc' => 'int',
		'creater' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'signed',
		'submitted'
	];

	protected $fillable = [
		'created',
		'state',
		'modified',
		'pdf',
		'bdoc',
		'lang',
		'creater',
		'signed',
		'signtype',
		'submitted',
		'adminstate'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'bdoc');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'creater');
	}

	public function muinas_searchreport_confirmation_statelogs()
	{
		return $this->hasMany(MuinasSearchreportConfirmationStatelog::class, 'searchreport_confirmation');
	}
}
