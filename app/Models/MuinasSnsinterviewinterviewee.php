<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsinterviewinterviewee
 * 
 * @property int $id
 * @property int $snsinterview
 * @property string $interviewee
 * @property int|null $intervieweeage
 * @property string $intervieweebirthaccuracy
 * @property string|null $intervieweebirthday
 * @property string $intervieweebirthmonth
 * @property string $intervieweebirthyear
 * @property int|null $intervieweecurrentoldcounty
 * @property int|null $intervieweecurrentoldparish
 * @property int|null $intervieweecurrentcounty
 * @property int|null $intervieweecurrentparish
 * @property string $intervieweecurrentaddress
 * @property int|null $intervieweeformeroldcounty
 * @property int|null $intervieweeformeroldparish
 * @property int|null $intervieweeformercounty
 * @property int|null $intervieweeformerparish
 * @property string $intervieweeformeraddress
 * @property string $intervieweeemail
 * @property string $intervieweephone
 * @property string $intervieweeaddress
 * @property int|null $creater
 * @property Carbon|null $created
 * @property Carbon|null $modified
 * @property string $status
 *
 * @package App\Models
 */
class MuinasSnsinterviewinterviewee extends Model
{
	protected $table = 'muinas_snsinterviewinterviewee';
	public $timestamps = false;

	protected $casts = [
		'snsinterview' => 'int',
		'intervieweeage' => 'int',
		'intervieweecurrentoldcounty' => 'int',
		'intervieweecurrentoldparish' => 'int',
		'intervieweecurrentcounty' => 'int',
		'intervieweecurrentparish' => 'int',
		'intervieweeformeroldcounty' => 'int',
		'intervieweeformeroldparish' => 'int',
		'intervieweeformercounty' => 'int',
		'intervieweeformerparish' => 'int',
		'creater' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'snsinterview',
		'interviewee',
		'intervieweeage',
		'intervieweebirthaccuracy',
		'intervieweebirthday',
		'intervieweebirthmonth',
		'intervieweebirthyear',
		'intervieweecurrentoldcounty',
		'intervieweecurrentoldparish',
		'intervieweecurrentcounty',
		'intervieweecurrentparish',
		'intervieweecurrentaddress',
		'intervieweeformeroldcounty',
		'intervieweeformeroldparish',
		'intervieweeformercounty',
		'intervieweeformerparish',
		'intervieweeformeraddress',
		'intervieweeemail',
		'intervieweephone',
		'intervieweeaddress',
		'creater',
		'created',
		'modified',
		'status'
	];
}
