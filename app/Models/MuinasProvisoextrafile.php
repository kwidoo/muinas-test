<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoextrafile
 * 
 * @property int $proviso
 * @property int $filebank
 * @property string|null $title
 * @property bool|null $type
 * @property int|null $comment_id
 * @property int|null $person
 * @property Carbon|null $created
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasProviso $muinas_proviso
 *
 * @package App\Models
 */
class MuinasProvisoextrafile extends Model
{
	protected $table = 'muinas_provisoextrafile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'proviso' => 'int',
		'filebank' => 'int',
		'type' => 'bool',
		'comment_id' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'type',
		'comment_id',
		'person',
		'created'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_proviso()
	{
		return $this->belongsTo(MuinasProviso::class, 'proviso');
	}
}
