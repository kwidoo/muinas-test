<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSeizedculturalproperty
 * 
 * @property int $id
 * @property string $temporarystorageaddress
 * @property int $temporarystoragecounty
 * @property int $temporarystorageparish
 * @property int|null $temporarystorageownerperson
 * @property int|null $maintenanceownerperson
 * @property string $title
 * @property int $object_designation
 * @property Carbon|null $findingdate
 * @property int $findingcounty
 * @property int $findingparish
 * @property string $findingaddress
 * @property int $ownerperson
 * @property string $description
 * @property string $decision
 * @property int $maintenancecounty
 * @property int $maintenanceparish
 * @property string $maintenanceaddress
 * @property string $status
 * @property Carbon $created
 * @property string $placedescription
 * @property string $placeresearch
 * @property string $finderfeedecision
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasSeizedculturalproperty extends Model
{
	protected $table = 'muinas_seizedculturalproperty';
	public $timestamps = false;

	protected $casts = [
		'temporarystoragecounty' => 'int',
		'temporarystorageparish' => 'int',
		'temporarystorageownerperson' => 'int',
		'maintenanceownerperson' => 'int',
		'object_designation' => 'int',
		'findingcounty' => 'int',
		'findingparish' => 'int',
		'ownerperson' => 'int',
		'maintenancecounty' => 'int',
		'maintenanceparish' => 'int'
	];

	protected $dates = [
		'findingdate',
		'created'
	];

	protected $fillable = [
		'temporarystorageaddress',
		'temporarystoragecounty',
		'temporarystorageparish',
		'temporarystorageownerperson',
		'maintenanceownerperson',
		'title',
		'object_designation',
		'findingdate',
		'findingcounty',
		'findingparish',
		'findingaddress',
		'ownerperson',
		'description',
		'decision',
		'maintenancecounty',
		'maintenanceparish',
		'maintenanceaddress',
		'status',
		'created',
		'placedescription',
		'placeresearch',
		'finderfeedecision'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'maintenanceownerperson');
	}
}
