<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisomonumentowner
 * 
 * @property int $id
 * @property int $proviso
 * @property string|null $name
 * @property string|null $email
 * @property string|null $code
 * @property string|null $phone
 * @property int|null $ownerperson
 * 
 * @property MuinasProviso $muinas_proviso
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasProvisomonumentowner extends Model
{
	protected $table = 'muinas_provisomonumentowner';
	public $timestamps = false;

	protected $casts = [
		'proviso' => 'int',
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'proviso',
		'name',
		'email',
		'code',
		'phone',
		'ownerperson'
	];

	public function muinas_proviso()
	{
		return $this->belongsTo(MuinasProviso::class, 'proviso');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
