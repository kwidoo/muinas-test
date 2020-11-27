<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPersonaccountgroup
 * 
 * @property int $person
 * @property string $accountgroup
 * @property bool|null $admin
 * @property int $assignerperson
 *
 * @package App\Models
 */
class MuinasPersonaccountgroup extends Model
{
	protected $table = 'muinas_personaccountgroup';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'person' => 'int',
		'admin' => 'bool',
		'assignerperson' => 'int'
	];

	protected $fillable = [
		'admin',
		'assignerperson'
	];
}
