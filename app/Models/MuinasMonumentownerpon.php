<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentownerpon
 * 
 * @property int $id
 * @property int $monumentowner
 * @property Carbon $created
 * @property Carbon|null $enddate
 * @property string $inspector
 * @property int|null $monument
 * @property string $opname
 * @property string $opcode
 * @property bool|null $mois
 * @property bool|null $opis
 * @property bool|null $opdis
 * @property string $mfrom
 *
 * @package App\Models
 */
class MuinasMonumentownerpon extends Model
{
	protected $table = 'muinas_monumentownerpon';
	public $timestamps = false;

	protected $casts = [
		'monumentowner' => 'int',
		'monument' => 'int',
		'mois' => 'bool',
		'opis' => 'bool',
		'opdis' => 'bool'
	];

	protected $dates = [
		'created',
		'enddate'
	];

	protected $fillable = [
		'monumentowner',
		'created',
		'enddate',
		'inspector',
		'monument',
		'opname',
		'opcode',
		'mois',
		'opis',
		'opdis',
		'mfrom'
	];
}
