<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasArchivalmaterial
 * 
 * @property int $id
 * @property string $title
 * @property string $address
 * @property string $links
 * @property Carbon $created
 * @property string $status
 * @property int $person
 * @property int|null $type
 * @property int|null $cm_type
 * @property int|null $county
 * @property int|null $parish
 * @property string $countyfolder
 * @property string $archivalreference
 * @property string $author
 * 
 * @property Collection|MuinasArchivalmaterialmuinasobject[] $muinas_archivalmaterialmuinasobjects
 *
 * @package App\Models
 */
class MuinasArchivalmaterial extends Model
{
	protected $table = 'muinas_archivalmaterial';
	public $timestamps = false;

	protected $casts = [
		'person' => 'int',
		'type' => 'int',
		'cm_type' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'address',
		'links',
		'created',
		'status',
		'person',
		'type',
		'cm_type',
		'county',
		'parish',
		'countyfolder',
		'archivalreference',
		'author'
	];

	public function muinas_archivalmaterialmuinasobjects()
	{
		return $this->hasMany(MuinasArchivalmaterialmuinasobject::class, 'archivalmaterial');
	}
}
