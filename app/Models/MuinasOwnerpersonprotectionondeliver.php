<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOwnerpersonprotectionondeliver
 * 
 * @property int $deliverid
 * @property int|null $ownerperson
 * @property string $maildata
 * @property int $protectionon
 * @property Carbon|null $delivered
 * @property int $person
 * @property string $method
 * @property bool|null $imported
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasOwnerpersonprotectionondeliver extends Model
{
	protected $table = 'muinas_ownerpersonprotectionondeliver';
	protected $primaryKey = 'deliverid';
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'protectionon' => 'int',
		'person' => 'int',
		'imported' => 'bool'
	];

	protected $dates = [
		'delivered'
	];

	protected $fillable = [
		'ownerperson',
		'maildata',
		'protectionon',
		'delivered',
		'person',
		'method',
		'imported'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
