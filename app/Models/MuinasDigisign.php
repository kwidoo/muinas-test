<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDigisign
 * 
 * @property int $id
 * @property string $salt
 * @property Carbon $created
 * @property string|null $request_data
 * @property string|null $signer_data
 *
 * @package App\Models
 */
class MuinasDigisign extends Model
{
	protected $table = 'muinas_digisign';
	public $timestamps = false;

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'salt',
		'created',
		'request_data',
		'signer_data'
	];
}
