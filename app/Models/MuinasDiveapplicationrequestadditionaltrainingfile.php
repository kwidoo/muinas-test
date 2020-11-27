<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequestadditionaltrainingfile
 * 
 * @property int $diveapplicationrequestadditionaltraining
 * @property int $filebank
 * @property string $title
 * @property bool|null $type
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasDiveapplicationrequestadditionaltraining $muinas_diveapplicationrequestadditionaltraining
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequestadditionaltrainingfile extends Model
{
	protected $table = 'muinas_diveapplicationrequestadditionaltrainingfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'diveapplicationrequestadditionaltraining' => 'int',
		'filebank' => 'int',
		'type' => 'bool'
	];

	protected $fillable = [
		'title',
		'type'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_diveapplicationrequestadditionaltraining()
	{
		return $this->belongsTo(MuinasDiveapplicationrequestadditionaltraining::class, 'diveapplicationrequestadditionaltraining');
	}
}
