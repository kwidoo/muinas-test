<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivepermitfile
 * 
 * @property int $divepermit
 * @property int $filebank
 * @property string|null $type
 *
 * @package App\Models
 */
class MuinasDivepermitfile extends Model
{
	protected $table = 'muinas_divepermitfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'divepermit' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'divepermit',
		'filebank',
		'type'
	];
}
