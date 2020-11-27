<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasConfidant
 * 
 * @property int $id
 * @property int $ownerperson
 * @property string $certificate_nr
 * @property string $phone
 * @property string $email
 * @property bool $public
 * @property Carbon $created
 * @property string $status
 * @property int $county
 * @property int $parish
 * @property string $address
 * @property int $operatingarea
 * 
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property Collection|MuinasConfidantcounty[] $muinas_confidantcounties
 *
 * @package App\Models
 */
class MuinasConfidant extends Model
{
	protected $table = 'muinas_confidant';
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'public' => 'bool',
		'county' => 'int',
		'parish' => 'int',
		'operatingarea' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'ownerperson',
		'certificate_nr',
		'phone',
		'email',
		'public',
		'created',
		'status',
		'county',
		'parish',
		'address',
		'operatingarea'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_confidantcounties()
	{
		return $this->hasMany(MuinasConfidantcounty::class, 'confidant');
	}
}
