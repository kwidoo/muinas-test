<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequestadditionaltrainingfile
 * 
 * @property int $searchapplicationrequestadditionaltraining
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasSearchapplicationrequestadditionaltraining $muinas_searchapplicationrequestadditionaltraining
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequestadditionaltrainingfile extends Model
{
	protected $table = 'muinas_searchapplicationrequestadditionaltrainingfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequestadditionaltraining' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_searchapplicationrequestadditionaltraining()
	{
		return $this->belongsTo(MuinasSearchapplicationrequestadditionaltraining::class, 'searchapplicationrequestadditionaltraining');
	}
}
