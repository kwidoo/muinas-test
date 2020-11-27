<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticeplaceinfo
 * 
 * @property int $id
 * @property int $placeinfolmnotice
 * @property string $comment
 * @property string $eracode
 * @property string $old_village
 * @property string $old_parish2
 * @property string $village
 * @property string $farm
 * @property string $other
 * @property string $gpsx
 * @property string $gpsy
 * @property string $name
 * @property string $toponym
 * @property int|null $old_county
 * @property int|null $old_parish
 * @property int|null $county
 * @property int|null $parish
 * @property int|null $placeinfo
 * @property string $security
 * 
 * @property MuinasPlaceinfo|null $muinas_placeinfo
 * @property MuinasPlaceinfolmnotice $muinas_placeinfolmnotice
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticeplaceinfo extends Model
{
	protected $table = 'muinas_placeinfolmnoticeplaceinfo';
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int',
		'old_county' => 'int',
		'old_parish' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'placeinfo' => 'int'
	];

	protected $fillable = [
		'placeinfolmnotice',
		'comment',
		'eracode',
		'old_village',
		'old_parish2',
		'village',
		'farm',
		'other',
		'gpsx',
		'gpsy',
		'name',
		'toponym',
		'old_county',
		'old_parish',
		'county',
		'parish',
		'placeinfo',
		'security'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}

	public function muinas_placeinfolmnotice()
	{
		return $this->belongsTo(MuinasPlaceinfolmnotice::class, 'placeinfolmnotice');
	}
}
