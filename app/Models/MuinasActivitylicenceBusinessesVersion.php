<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceBusinessesVersion
 * 
 * @property int $id
 * @property int|null $original
 * @property string|null $number
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $pcode
 * @property Carbon|null $startdate
 * @property Carbon|null $enddate
 * @property Carbon|null $created
 * @property string|null $status
 * @property int|null $ownerperson
 * @property int|null $person
 * @property string|null $comment
 * @property string|null $cancel_decision_reason
 * @property string|null $changed_fields
 *
 * @package App\Models
 */
class MuinasActivitylicenceBusinessesVersion extends Model
{
	protected $table = 'muinas_activitylicence_businesses_versions';
	public $timestamps = false;

	protected $casts = [
		'original' => 'int',
		'ownerperson' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'startdate',
		'enddate',
		'created'
	];

	protected $fillable = [
		'original',
		'number',
		'address',
		'phone',
		'email',
		'pcode',
		'startdate',
		'enddate',
		'created',
		'status',
		'ownerperson',
		'person',
		'comment',
		'cancel_decision_reason',
		'changed_fields'
	];
}
