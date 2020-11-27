<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSacrednaturalsitebanner
 * 
 * @property int $id
 * @property string $title
 * @property string $filename
 * @property string $url
 * @property bool $blank
 * @property string $type
 * @property Carbon|null $startdate
 * @property Carbon|null $enddate
 * @property string $status
 *
 * @package App\Models
 */
class MuinasSacrednaturalsitebanner extends Model
{
	protected $table = 'muinas_sacrednaturalsitebanner';
	public $timestamps = false;

	protected $casts = [
		'blank' => 'bool'
	];

	protected $dates = [
		'startdate',
		'enddate'
	];

	protected $fillable = [
		'title',
		'filename',
		'url',
		'blank',
		'type',
		'startdate',
		'enddate',
		'status'
	];
}
