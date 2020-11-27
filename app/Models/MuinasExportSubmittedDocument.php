<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasExportSubmittedDocument
 * 
 * @property int $id
 * @property int|null $export_id
 * @property int|null $filebank
 * @property string|null $description
 * @property int|null $position
 * @property bool|null $status
 * @property string|null $title
 * @property bool|null $disabled
 * @property int|null $version
 * @property string|null $type
 * 
 * @property MuinasExport|null $muinas_export
 *
 * @package App\Models
 */
class MuinasExportSubmittedDocument extends Model
{
	protected $table = 'muinas_export_submitted_documents';
	public $timestamps = false;

	protected $casts = [
		'export_id' => 'int',
		'filebank' => 'int',
		'position' => 'int',
		'status' => 'bool',
		'disabled' => 'bool',
		'version' => 'int'
	];

	protected $fillable = [
		'export_id',
		'filebank',
		'description',
		'position',
		'status',
		'title',
		'disabled',
		'version',
		'type'
	];

	public function muinas_export()
	{
		return $this->belongsTo(MuinasExport::class, 'export_id');
	}
}
