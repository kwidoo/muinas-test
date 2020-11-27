<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHelp
 * 
 * @property string $interface
 * @property string $menuid
 * @property string $action
 * @property string $content
 * @property bool|null $ishtml
 *
 * @package App\Models
 */
class MuinasHelp extends Model
{
	protected $table = 'muinas_help';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ishtml' => 'bool'
	];

	protected $fillable = [
		'interface',
		'menuid',
		'action',
		'content',
		'ishtml'
	];
}
