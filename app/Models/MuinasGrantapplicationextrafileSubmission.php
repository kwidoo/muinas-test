<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationextrafileSubmission
 * 
 * @property int $grantapplication_submission
 * @property int $filebank
 * @property string $title
 * @property bool|null $status
 * @property int|null $comment_id
 * @property bool|null $is_admin
 * 
 * @property MuinasGrantapplicationSubmission $muinas_grantapplication_submission
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasGrantapplicationextrafileSubmission extends Model
{
	protected $table = 'muinas_grantapplicationextrafile_submission';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplication_submission' => 'int',
		'filebank' => 'int',
		'status' => 'bool',
		'comment_id' => 'int',
		'is_admin' => 'bool'
	];

	protected $fillable = [
		'title',
		'status',
		'comment_id',
		'is_admin'
	];

	public function muinas_grantapplication_submission()
	{
		return $this->belongsTo(MuinasGrantapplicationSubmission::class, 'grantapplication_submission');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
