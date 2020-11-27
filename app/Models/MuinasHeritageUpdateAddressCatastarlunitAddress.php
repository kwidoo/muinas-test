<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageUpdateAddressCatastarlunitAddress
 * 
 * @property int $heritage
 * @property string $catastralunit
 * @property int $address
 * @property Carbon $created
 * @property Carbon|null $updated
 * @property Carbon|null $ceased
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasAddress $muinas_address
 *
 * @package App\Models
 */
class MuinasHeritageUpdateAddressCatastarlunitAddress extends Model
{
	protected $table = 'muinas_heritage_update_address_catastarlunit_address';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'address' => 'int'
	];

	protected $dates = [
		'created',
		'updated',
		'ceased'
	];

	protected $fillable = [
		'created',
		'updated',
		'ceased'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
