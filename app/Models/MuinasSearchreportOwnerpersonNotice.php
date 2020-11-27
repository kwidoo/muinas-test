<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportOwnerpersonNotice
 * 
 * @property int $searchreport
 * @property int $ownerperson
 * @property int $notice
 * @property string|null $email
 * 
 * @property MuinasSearchreport $muinas_searchreport
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property MuinasOwnerpersonNotice $muinas_ownerperson_notice
 *
 * @package App\Models
 */
class MuinasSearchreportOwnerpersonNotice extends Model
{
	protected $table = 'muinas_searchreport_ownerperson_notice';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int',
		'ownerperson' => 'int',
		'notice' => 'int'
	];

	protected $fillable = [
		'email'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_ownerperson_notice()
	{
		return $this->belongsTo(MuinasOwnerpersonNotice::class, 'notice');
	}
}
