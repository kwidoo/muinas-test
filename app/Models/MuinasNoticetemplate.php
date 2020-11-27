<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasNoticetemplate
 * 
 * @property string $name
 * @property string $locale
 * @property string $datafields
 *
 * @package App\Models
 */
class MuinasNoticetemplate extends Model
{
	protected $table = 'muinas_noticetemplate';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'datafields'
	];
}
