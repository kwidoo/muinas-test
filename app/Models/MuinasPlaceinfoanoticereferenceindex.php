<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoanoticereferenceindex
 * 
 * @property int $placeinfoanotice
 * @property string $type
 * @property int|null $index
 * @property string|null $value
 * @property int|null $value_int
 * @property string|null $txt
 * 
 * @property MuinasPlaceinfoanotice $muinas_placeinfoanotice
 *
 * @package App\Models
 */
class MuinasPlaceinfoanoticereferenceindex extends Model
{
	protected $table = 'muinas_placeinfoanoticereferenceindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfoanotice' => 'int',
		'index' => 'int',
		'value_int' => 'int'
	];

	protected $fillable = [
		'placeinfoanotice',
		'type',
		'index',
		'value',
		'value_int',
		'txt'
	];

	public function muinas_placeinfoanotice()
	{
		return $this->belongsTo(MuinasPlaceinfoanotice::class, 'placeinfoanotice');
	}
}
