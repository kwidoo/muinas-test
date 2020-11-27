<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRelation
 * 
 * @property int $id
 * @property int $document_1_id
 * @property int $document_2_id
 * @property string $document_1_type
 * @property string $document_2_type
 * @property string|null $status
 * @property Carbon $created
 * @property Carbon|null $modified
 * @property int $person
 *
 * @package App\Models
 */
class MuinasRelation extends Model
{
	protected $table = 'muinas_relation';
	public $timestamps = false;

	protected $casts = [
		'document_1_id' => 'int',
		'document_2_id' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'document_1_id',
		'document_2_id',
		'document_1_type',
		'document_2_type',
		'status',
		'created',
		'modified',
		'person'
	];
}
