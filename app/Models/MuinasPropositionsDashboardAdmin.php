<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionsDashboardAdmin
 * 
 * @property int $id
 * @property string|null $issue_name
 * @property int|null $status
 * @property int|null $sender_person_id
 * @property bool $sender_type_old
 * @property string|null $sender_type
 * @property Carbon|null $created
 * @property Carbon|null $deadline
 * @property Carbon|null $finished
 * @property int|null $recipient_person_id
 * @property bool|null $new_old
 * @property string|null $new
 * @property int $common_status_old
 * @property string|null $common_status
 * @property int|null $phase_id
 * @property int $task_type_old
 * @property string|null $task_type
 * @property int|null $export_id
 * @property int|null $application_id
 * @property Carbon|null $updated
 *
 * @package App\Models
 */
class MuinasPropositionsDashboardAdmin extends Model
{
	protected $table = 'muinas_propositions_dashboard_admin';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'sender_person_id' => 'int',
		'sender_type_old' => 'bool',
		'recipient_person_id' => 'int',
		'new_old' => 'bool',
		'common_status_old' => 'int',
		'phase_id' => 'int',
		'task_type_old' => 'int',
		'export_id' => 'int',
		'application_id' => 'int'
	];

	protected $dates = [
		'created',
		'deadline',
		'finished',
		'updated'
	];

	protected $fillable = [
		'issue_name',
		'status',
		'sender_person_id',
		'sender_type_old',
		'sender_type',
		'created',
		'deadline',
		'finished',
		'recipient_person_id',
		'new_old',
		'new',
		'common_status_old',
		'common_status',
		'phase_id',
		'task_type_old',
		'task_type',
		'export_id',
		'application_id',
		'updated'
	];
}
