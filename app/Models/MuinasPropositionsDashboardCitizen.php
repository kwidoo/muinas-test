<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionsDashboardCitizen
 * 
 * @property int $id
 * @property string|null $issue_name
 * @property string|null $object_name
 * @property string|null $address
 * @property int|null $status
 * @property Carbon|null $created
 * @property Carbon|null $deadline
 * @property Carbon|null $finished
 * @property string|null $url
 * @property string|null $md5_url
 * @property string|null $recipient_user_id
 * @property int|null $phase_id
 * @property bool $new
 * @property int $common_status
 *
 * @package App\Models
 */
class MuinasPropositionsDashboardCitizen extends Model
{
	protected $table = 'muinas_propositions_dashboard_citizen';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'phase_id' => 'int',
		'new' => 'bool',
		'common_status' => 'int'
	];

	protected $dates = [
		'created',
		'deadline',
		'finished'
	];

	protected $fillable = [
		'issue_name',
		'object_name',
		'address',
		'status',
		'created',
		'deadline',
		'finished',
		'url',
		'md5_url',
		'recipient_user_id',
		'phase_id',
		'new',
		'common_status'
	];
}
