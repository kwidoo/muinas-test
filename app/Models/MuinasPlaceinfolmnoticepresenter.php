<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticepresenter
 * 
 * @property int $placeinfolmnotice
 * @property string $residencemore
 * @property string $originmore
 * @property string $origincomment
 * @property int $presenter
 * @property int|null $residenceoldcounty
 * @property int $residenceoldparish
 * @property int|null $originoldcounty
 * @property int $originoldparish
 * @property string $birthyear
 * @property string $age
 * @property string $comment
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticepresenter extends Model
{
	protected $table = 'muinas_placeinfolmnoticepresenter';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int',
		'presenter' => 'int',
		'residenceoldcounty' => 'int',
		'residenceoldparish' => 'int',
		'originoldcounty' => 'int',
		'originoldparish' => 'int'
	];

	protected $fillable = [
		'residencemore',
		'originmore',
		'origincomment',
		'residenceoldcounty',
		'residenceoldparish',
		'originoldcounty',
		'originoldparish',
		'birthyear',
		'age',
		'comment'
	];
}
