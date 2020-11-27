<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnotice
 * 
 * @property int $id
 * @property string $reference
 * @property string $referencecollection
 * @property string $referencepiece
 * @property string $referencevolume
 * @property string $referencepage1
 * @property string $referencepage2
 * @property string $residencemore
 * @property string $originmore
 * @property string $origincomment
 * @property string $taletype
 * @property string $talecomment
 * @property string $arhivetext
 * @property string $remarks
 * @property string|null $codability
 * @property string $security
 * @property string $placesecurity
 * @property Carbon $created
 * @property string $status
 * @property int|null $residenceoldcounty
 * @property int|null $residenceoldparish
 * @property int|null $originoldcounty
 * @property int|null $originoldparish
 * @property int|null $inserter
 * @property Carbon $modified
 * @property int|null $inspector
 * @property string|null $literer
 * @property string $fullreference
 * @property string|null $editedfullreference
 * @property string|null $old_reg_nr
 * 
 * @property Collection|MuinasPlaceinfolmnoticeplaceinfo[] $muinas_placeinfolmnoticeplaceinfos
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnotice extends Model
{
	protected $table = 'muinas_placeinfolmnotice';
	public $timestamps = false;

	protected $casts = [
		'residenceoldcounty' => 'int',
		'residenceoldparish' => 'int',
		'originoldcounty' => 'int',
		'originoldparish' => 'int',
		'inserter' => 'int',
		'inspector' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'reference',
		'referencecollection',
		'referencepiece',
		'referencevolume',
		'referencepage1',
		'referencepage2',
		'residencemore',
		'originmore',
		'origincomment',
		'taletype',
		'talecomment',
		'arhivetext',
		'remarks',
		'codability',
		'security',
		'placesecurity',
		'created',
		'status',
		'residenceoldcounty',
		'residenceoldparish',
		'originoldcounty',
		'originoldparish',
		'inserter',
		'modified',
		'inspector',
		'literer',
		'fullreference',
		'editedfullreference',
		'old_reg_nr'
	];

	public function muinas_placeinfolmnoticeplaceinfos()
	{
		return $this->hasMany(MuinasPlaceinfolmnoticeplaceinfo::class, 'placeinfolmnotice');
	}
}
