<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoPostgi
 * 
 * @property int $person
 * @property string $role_id
 * @property string $username
 * @property string $password
 * @property string $database
 * @property bool|null $database_created
 * @property bool|null $active
 * @property bool|null $updating
 * @property bool $database_granted
 * @property bool $tables_created
 * @property Carbon|null $persisted
 * @property Carbon|null $synced
 * @property bool $cansave
 * 
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasPlaceinfoPostgi extends Model
{
	protected $table = 'muinas_placeinfo_postgis';
	protected $primaryKey = 'person';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'person' => 'int',
		'database_created' => 'bool',
		'active' => 'bool',
		'updating' => 'bool',
		'database_granted' => 'bool',
		'tables_created' => 'bool',
		'cansave' => 'bool'
	];

	protected $dates = [
		'persisted',
		'synced'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'role_id',
		'username',
		'password',
		'database',
		'database_created',
		'active',
		'updating',
		'database_granted',
		'tables_created',
		'persisted',
		'synced',
		'cansave'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
