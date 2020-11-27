<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivepermit
 * 
 * @property int $id
 * @property int|null $diveapplicationrequest
 * @property int|null $authorisation
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property Carbon|null $signed
 * @property int|null $signer
 * @property string|null $state
 * @property Carbon|null $submitted
 * @property string|null $adminstate
 *
 * @package App\Models
 */
class MuinasDivepermit extends Model
{
	protected $table = 'muinas_divepermit';
	public $timestamps = false;

	protected $casts = [
		'diveapplicationrequest' => 'int',
		'authorisation' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'signer' => 'int'
	];

	protected $dates = [
		'signed',
		'submitted'
	];

	protected $fillable = [
		'diveapplicationrequest',
		'authorisation',
		'pdf',
		'ddoc',
		'signed',
		'signer',
		'state',
		'submitted',
		'adminstate'
	];
}
