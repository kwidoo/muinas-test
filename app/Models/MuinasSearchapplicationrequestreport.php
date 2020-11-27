<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequestreport
 * 
 * @property int $searchapplicationrequest
 * @property int $searchreport
 * 
 * @property MuinasSearchapplicationrequest $muinas_searchapplicationrequest
 * @property MuinasSearchreport $muinas_searchreport
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequestreport extends Model
{
	protected $table = 'muinas_searchapplicationrequestreport';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequest' => 'int',
		'searchreport' => 'int'
	];

	public function muinas_searchapplicationrequest()
	{
		return $this->belongsTo(MuinasSearchapplicationrequest::class, 'searchapplicationrequest');
	}

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}
}
