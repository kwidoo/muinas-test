<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasExportEmailLog
 * 
 * @property int $id
 * @property int|null $export_id
 * @property Carbon|null $created
 * @property string|null $sender
 * @property string|null $recipient
 * @property string|null $subject
 * @property string|null $text
 * 
 * @property MuinasExport|null $muinas_export
 *
 * @package App\Models
 */
class MuinasExportEmailLog extends Model
{
	protected $table = 'muinas_export_email_logs';
	public $timestamps = false;

	protected $casts = [
		'export_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'export_id',
		'created',
		'sender',
		'recipient',
		'subject',
		'text'
	];

	public function muinas_export()
	{
		return $this->belongsTo(MuinasExport::class, 'export_id');
	}
}
