<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationmonumentowner
 * 
 * @property int $id
 * @property int $grantapplication
 * @property string $name
 * @property string $email
 * @property string $code
 * @property string $phone
 * @property int|null $ownerperson
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasGrantapplicationmonumentowner extends Model
{
	protected $table = 'muinas_grantapplicationmonumentowner';
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'grantapplication',
		'name',
		'email',
		'code',
		'phone',
		'ownerperson'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
