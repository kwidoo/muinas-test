<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCatastralunitkrowner
 * 
 * @property int $id
 * @property int $registriosa
 * @property string $omandi_liik
 * @property string $isiku_liik
 * @property string $riik
 * @property string $registrikood
 * @property string $nimi
 * @property string $eesnimi
 * @property Carbon|null $synniaeg
 * @property Carbon|null $omandi_algus
 * @property string $unit
 * @property int $muinas_krowner
 * @property Carbon $updated
 *
 * @package App\Models
 */
class MuinasCatastralunitkrowner extends Model
{
	protected $table = 'muinas_catastralunitkrowner';
	public $timestamps = false;

	protected $casts = [
		'registriosa' => 'int',
		'muinas_krowner' => 'int'
	];

	protected $dates = [
		'synniaeg',
		'omandi_algus',
		'updated'
	];

	protected $fillable = [
		'registriosa',
		'omandi_liik',
		'isiku_liik',
		'riik',
		'registrikood',
		'nimi',
		'eesnimi',
		'synniaeg',
		'omandi_algus',
		'unit',
		'muinas_krowner',
		'updated'
	];
}
