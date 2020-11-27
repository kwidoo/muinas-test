<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceBusiness
 * 
 * @property int $id
 * @property int $nr
 * @property string $number
 * @property string|null $number_part_1
 * @property int|null $number_part_2
 * @property int|null $number_part_3
 * @property string|null $number_part_4
 * @property int|null $number_part_5
 * @property string|null $operator
 * @property string $address
 * @property string|null $phone
 * @property string|null $faks
 * @property string $email
 * @property string $type
 * @property string $pcode
 * @property string|null $jobname
 * @property string|null $training
 * @property string|null $work_type
 * @property string|null $specialists
 * @property Carbon|null $startdate
 * @property Carbon|null $enddate
 * @property string|null $leader
 * @property string|null $comments
 * @property Carbon $created
 * @property string $status
 * @property int|null $ownerperson
 * @property Carbon|null $emailed
 * @property string|null $repeal
 * @property int|null $person
 * @property string|null $comment
 * @property Carbon|null $adminnotice
 * @property string|null $mtrrecord
 * @property Carbon|null $mtrimported
 * @property string|null $cancel_decision_reason
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasActivitylicenceBusiness extends Model
{
	protected $table = 'muinas_activitylicence_businesses';
	public $timestamps = false;

	protected $casts = [
		'nr' => 'int',
		'number_part_2' => 'int',
		'number_part_3' => 'int',
		'number_part_5' => 'int',
		'ownerperson' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'startdate',
		'enddate',
		'created',
		'emailed',
		'adminnotice',
		'mtrimported'
	];

	protected $fillable = [
		'nr',
		'number',
		'number_part_1',
		'number_part_2',
		'number_part_3',
		'number_part_4',
		'number_part_5',
		'operator',
		'address',
		'phone',
		'faks',
		'email',
		'type',
		'pcode',
		'jobname',
		'training',
		'work_type',
		'specialists',
		'startdate',
		'enddate',
		'leader',
		'comments',
		'created',
		'status',
		'ownerperson',
		'emailed',
		'repeal',
		'person',
		'comment',
		'adminnotice',
		'mtrrecord',
		'mtrimported',
		'cancel_decision_reason'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
