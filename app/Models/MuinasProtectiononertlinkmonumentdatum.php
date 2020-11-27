<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProtectiononertlinkmonumentdatum
 * 
 * @property int $protectiononertlinkmonument
 * @property string $field
 * @property string $fielddata
 *
 * @package App\Models
 */
class MuinasProtectiononertlinkmonumentdatum extends Model
{
	protected $table = 'muinas_protectiononertlinkmonumentdata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'protectiononertlinkmonument' => 'int'
	];

	protected $fillable = [
		'protectiononertlinkmonument',
		'field',
		'fielddata'
	];
}
