<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchpermit
 * 
 * @property int $id
 * @property int|null $searchapplicationrequest
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
class MuinasSearchpermit extends Model
{
	protected $table = 'muinas_searchpermit';
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequest' => 'int',
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
		'searchapplicationrequest',
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
