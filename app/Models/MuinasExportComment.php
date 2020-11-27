<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasExportComment
 * 
 * @property int|null $id
 * @property int|null $export_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * 
 * @property MuinasExport|null $muinas_export
 *
 * @package App\Models
 */
class MuinasExportComment extends Model
{
	protected $table = 'muinas_export_comments';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'export_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'id',
		'export_id',
		'person_id',
		'message',
		'created',
		'status'
	];

	public function muinas_export()
	{
		return $this->belongsTo(MuinasExport::class, 'export_id');
	}
}
