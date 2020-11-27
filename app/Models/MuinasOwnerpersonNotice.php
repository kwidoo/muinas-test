<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOwnerpersonNotice
 * 
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $full_name
 * @property string $type
 * @property Carbon $created
 * @property string|null $url
 * @property string $status
 * @property int|null $ownerperson
 * @property bool $new
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property Collection|MuinasSearchreportOwnerpersonNotice[] $muinas_searchreport_ownerperson_notices
 *
 * @package App\Models
 */
class MuinasOwnerpersonNotice extends Model
{
	protected $table = 'muinas_ownerperson_notice';
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'new' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'content',
		'full_name',
		'type',
		'created',
		'url',
		'status',
		'ownerperson',
		'new'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_searchreport_ownerperson_notices()
	{
		return $this->hasMany(MuinasSearchreportOwnerpersonNotice::class, 'notice');
	}
}
