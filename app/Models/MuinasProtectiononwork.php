<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProtectiononwork
 * 
 * @property int $id
 * @property int $protectionon
 * @property string $description
 * @property Carbon|null $deadline
 * @property string $comments
 *
 * @package App\Models
 */
class MuinasProtectiononwork extends Model
{
	protected $table = 'muinas_protectiononwork';
	public $timestamps = false;

	protected $casts = [
		'protectionon' => 'int'
	];

	protected $dates = [
		'deadline'
	];

	protected $fillable = [
		'protectionon',
		'description',
		'deadline',
		'comments'
	];
}
