<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequesttrainingfile
 * 
 * @property int $searchapplicationrequesttraining
 * @property int $filebank
 * @property string $title
 * @property string $type
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasSearchapplicationrequesttraining $muinas_searchapplicationrequesttraining
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequesttrainingfile extends Model
{
	protected $table = 'muinas_searchapplicationrequesttrainingfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequesttraining' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title',
		'type'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_searchapplicationrequesttraining()
	{
		return $this->belongsTo(MuinasSearchapplicationrequesttraining::class, 'searchapplicationrequesttraining');
	}
}
