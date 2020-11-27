<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagecache
 * 
 * @property int $heritage
 * @property string $key
 * @property Carbon $cached
 * @property string|null $cache
 * 
 * @property MuinasHeritage $muinas_heritage
 *
 * @package App\Models
 */
class MuinasHeritagecache extends Model
{
	protected $table = 'muinas_heritagecache';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int'
	];

	protected $dates = [
		'cached'
	];

	protected $fillable = [
		'cached',
		'cache'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}
}
