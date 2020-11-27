<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationmonumentowner
 * 
 * @property int $id
 * @property int $provisoapplication
 * @property string|null $name
 * @property string|null $email
 * @property string|null $code
 * @property string|null $phone
 * @property int|null $ownerperson
 * 
 * @property MuinasProvisoapplication $muinas_provisoapplication
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasProvisoapplicationmonumentowner extends Model
{
	protected $table = 'muinas_provisoapplicationmonumentowner';
	public $timestamps = false;

	protected $casts = [
		'provisoapplication' => 'int',
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'provisoapplication',
		'name',
		'email',
		'code',
		'phone',
		'ownerperson'
	];

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
