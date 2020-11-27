<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationimage
 * 
 * @property int $provisoapplication
 * @property int $filebank
 * @property string $title
 * @property bool|null $status
 * @property int|null $comment_id
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasProvisoapplication $muinas_provisoapplication
 *
 * @package App\Models
 */
class MuinasProvisoapplicationimage extends Model
{
	protected $table = 'muinas_provisoapplicationimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'provisoapplication' => 'int',
		'filebank' => 'int',
		'status' => 'bool',
		'comment_id' => 'int'
	];

	protected $fillable = [
		'title',
		'status',
		'comment_id'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication');
	}
}
