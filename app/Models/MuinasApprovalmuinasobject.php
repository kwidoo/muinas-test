<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalmuinasobject
 * 
 * @property int $id
 * @property int $muinasobject
 * @property int $approval
 * @property int|null $address
 * 
 * @property MuinasAddress|null $muinas_address
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasApproval $muinas_approval
 *
 * @package App\Models
 */
class MuinasApprovalmuinasobject extends Model
{
	protected $table = 'muinas_approvalmuinasobject';
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'approval' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'muinasobject',
		'approval',
		'address'
	];

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_approval()
	{
		return $this->belongsTo(MuinasApproval::class, 'approval');
	}
}
